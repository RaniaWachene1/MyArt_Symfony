<?php

namespace ContainerK4PbKGb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_3A1P0YqService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.3A1P0Yq' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.3A1P0Yq'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'panier' => ['privates', '.errored..service_locator.3A1P0Yq.App\\Entity\\Panier', NULL, 'Cannot autowire service ".service_locator.3A1P0Yq": it references class "App\\Entity\\Panier" but no such service exists.'],
        ], [
            'entityManager' => '?',
            'panier' => 'App\\Entity\\Panier',
        ]);
    }
}
