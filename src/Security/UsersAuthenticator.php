<?php

namespace App\Security;

use MercurySeries\FlashyBundle\FlashyNotifier;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Http\Authenticator\AbstractLoginFormAuthenticator;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\CsrfTokenBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\UserBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Credentials\PasswordCredentials;
use Symfony\Component\Security\Http\Authenticator\Passport\Passport;
use Symfony\Component\Security\Http\Util\TargetPathTrait;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\RouterInterface;

class UsersAuthenticator extends AbstractLoginFormAuthenticator
{
    use TargetPathTrait;

    public const LOGIN_ROUTE = 'app_login';
    private $entityManager;
    private $urlGenerator;
    private $csrfTokenManager;
    private $authenticationUtils; // define the property here
    public function __construct(RouterInterface $router, EntityManagerInterface $entityManager, UrlGeneratorInterface $urlGenerator,AuthenticationUtils $authenticationUtils, CsrfTokenManagerInterface $csrfTokenManager, UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->entityManager = $entityManager;
        $this->urlGenerator = $urlGenerator;
        $this->csrfTokenManager = $csrfTokenManager;
        $this->passwordEncoder = $passwordEncoder;
        $this->router = $router;
        $this->authenticationUtils = $authenticationUtils;
    }

    public function authenticate(Request $request): Passport
    {
        $email = $request->request->get('email', '');
        $request->getSession()->set(Security::LAST_USERNAME, $email);

        return new Passport(
            new UserBadge($email),
            new PasswordCredentials($request->request->get('password', '')),
            [
                new CsrfTokenBadge('authenticate', $request->request->get('_csrf_token')),
            ]
        );
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token, string $firewallName): ?Response
    {
        if ($targetPath = $this->getTargetPath($request->getSession(), $firewallName)) {
            return new RedirectResponse($targetPath);
        }
        $user = $token->getUser();
        if ($user->getBlock() == 'Blocked') {
            $this->authenticationUtils->getLastUsername();
            $request->getSession()->getFlashBag()->add('danger', 'Your account is blocked ,please contact the admin.');
            return new RedirectResponse($this->urlGenerator->generate(self::LOGIN_ROUTE));
        }
        // Get list of roles for current user
            $roles = $token->getUser()->getRoles();
            // Tranform this list in array

            // If is a admin we redirect to the backoffice area
            if (in_array('ROLE_ADMIN', $roles, true)){
                $redirection = new RedirectResponse($this->router->generate('app_stats'));
            }
            else if (in_array('ROLE_ARTIST', $roles, true)){
                $redirection = new RedirectResponse($this->router->generate('app_stats_artist'));
            }
            else{
                $redirection = new RedirectResponse($this->router->generate('app_articles_indexfront'));
            }
            return $redirection;

    }



    protected function getLoginUrl(Request $request): string
    {
        return $this->urlGenerator->generate(self::LOGIN_ROUTE);
    }
}
