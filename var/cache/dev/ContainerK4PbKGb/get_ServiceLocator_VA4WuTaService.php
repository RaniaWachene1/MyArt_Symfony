<?php

namespace ContainerK4PbKGb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_VA4WuTaService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.VA4WuTa' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.VA4WuTa'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'article' => ['privates', '.errored..service_locator.VA4WuTa.App\\Entity\\Articles', NULL, 'Cannot autowire service ".service_locator.VA4WuTa": it references class "App\\Entity\\Articles" but no such service exists.'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'flashy' => ['services', 'mercuryseries_flashy.flashy_notifier', 'getMercuryseriesFlashy_FlashyNotifierService', true],
        ], [
            'article' => 'App\\Entity\\Articles',
            'entityManager' => '?',
            'flashy' => '?',
        ]);
    }
}
