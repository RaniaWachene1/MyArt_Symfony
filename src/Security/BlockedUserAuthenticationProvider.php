<?php
namespace App\Security;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Exception\DisabledException;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;

/**
 * @method UserInterface loadUserByIdentifier(string $identifier)
 */
class BlockedUserAuthenticationProvider implements UserProviderInterface
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function loadUserByUsername(string $username): ?UserInterface
    {
        return $this->entityManager->getRepository(User::class)->findOneBy(['username' => $username]);
    }

    public function refreshUser(UserInterface $user): UserInterface
    {
        if (!$user instanceof User) {
            throw new \InvalidArgumentException('Invalid user class');
        }

        return $this->loadUserByUsername($user->getUsername());
    }

    public function supportsClass(string $class): bool
    {
        return User::class === $class;
    }

    public function checkCredentials($credentials, UserInterface $user)
    {
        if ($user->isBlocked()) {
            throw new DisabledException('User is blocked');
        }

// ... check other credentials ...

        return true;
    }

    public function __call($name, $arguments)
    {
        // TODO: Implement @method UserInterface loadUserByIdentifier(string $identifier)
    }
}
