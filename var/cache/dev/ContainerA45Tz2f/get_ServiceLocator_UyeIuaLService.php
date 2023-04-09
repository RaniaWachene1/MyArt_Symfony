<?php

namespace ContainerA45Tz2f;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_UyeIuaLService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.uyeIuaL' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.uyeIuaL'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'flashy' => ['services', 'mercuryseries_flashy.flashy_notifier', 'getMercuryseriesFlashy_FlashyNotifierService', true],
            'passwordencoder' => ['services', '.container.private.security.password_encoder', 'get_Container_Private_Security_PasswordEncoderService', true],
            'user' => ['privates', '.errored..service_locator.uyeIuaL.App\\Entity\\Users', NULL, 'Cannot autowire service ".service_locator.uyeIuaL": it references class "App\\Entity\\Users" but no such service exists.'],
        ], [
            'entityManager' => '?',
            'flashy' => '?',
            'passwordencoder' => '?',
            'user' => 'App\\Entity\\Users',
        ]);
    }
}
