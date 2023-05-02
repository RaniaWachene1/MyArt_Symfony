<?php

namespace ContainerFp4aJu1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_UICLnKrService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.UICLnKr' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.UICLnKr'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'commentaire' => ['privates', '.errored..service_locator.UICLnKr.App\\Entity\\Commentaire', NULL, 'Cannot autowire service ".service_locator.UICLnKr": it references class "App\\Entity\\Commentaire" but no such service exists.'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'commentaire' => 'App\\Entity\\Commentaire',
            'entityManager' => '?',
        ]);
    }
}
