<?php

namespace ContainerSSHIpWu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QMLTBp2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.QMLTBp2' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.QMLTBp2'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'panier' => ['privates', '.errored..service_locator.QMLTBp2.App\\Entity\\Panier', NULL, 'Cannot autowire service ".service_locator.QMLTBp2": it references class "App\\Entity\\Panier" but no such service exists.'],
        ], [
            'panier' => 'App\\Entity\\Panier',
        ]);
    }
}
