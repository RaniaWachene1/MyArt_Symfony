<?php

namespace ContainerSSHIpWu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_LeQo8VSService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.LeQo8VS' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.LeQo8VS'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'galery' => ['privates', '.errored..service_locator.LeQo8VS.App\\Entity\\Galeries', NULL, 'Cannot autowire service ".service_locator.LeQo8VS": it references class "App\\Entity\\Galeries" but no such service exists.'],
        ], [
            'galery' => 'App\\Entity\\Galeries',
        ]);
    }
}
