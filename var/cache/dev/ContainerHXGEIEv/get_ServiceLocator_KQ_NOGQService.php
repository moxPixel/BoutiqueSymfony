<?php

namespace ContainerHXGEIEv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KQ_NOGQService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.KQ.NOGQ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.KQ.NOGQ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\Admin\\CategoryCrudController::autocomplete' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\CategoryCrudController::batchDelete' => ['privates', '.service_locator.AWPr3oy', 'get_ServiceLocator_AWPr3oyService', true],
            'App\\Controller\\Admin\\CategoryCrudController::configureActions' => ['privates', '.service_locator.CKlWSja', 'get_ServiceLocator_CKlWSjaService', true],
            'App\\Controller\\Admin\\CategoryCrudController::configureAssets' => ['privates', '.service_locator.U4Bbnsn', 'get_ServiceLocator_U4BbnsnService', true],
            'App\\Controller\\Admin\\CategoryCrudController::configureCrud' => ['privates', '.service_locator.4C0Bh8j', 'get_ServiceLocator_4C0Bh8jService', true],
            'App\\Controller\\Admin\\CategoryCrudController::configureFilters' => ['privates', '.service_locator.Nt.ogDb', 'get_ServiceLocator_Nt_OgDbService', true],
            'App\\Controller\\Admin\\CategoryCrudController::configureResponseParameters' => ['privates', '.service_locator.2dc0eaX', 'get_ServiceLocator_2dc0eaXService', true],
            'App\\Controller\\Admin\\CategoryCrudController::createEditForm' => ['privates', '.service_locator.tbo4Jjv', 'get_ServiceLocator_Tbo4JjvService', true],
            'App\\Controller\\Admin\\CategoryCrudController::createEditFormBuilder' => ['privates', '.service_locator.tbo4Jjv', 'get_ServiceLocator_Tbo4JjvService', true],
            'App\\Controller\\Admin\\CategoryCrudController::createIndexQueryBuilder' => ['privates', '.service_locator.rAlqQ78', 'get_ServiceLocator_RAlqQ78Service', true],
            'App\\Controller\\Admin\\CategoryCrudController::createNewForm' => ['privates', '.service_locator.tbo4Jjv', 'get_ServiceLocator_Tbo4JjvService', true],
            'App\\Controller\\Admin\\CategoryCrudController::createNewFormBuilder' => ['privates', '.service_locator.tbo4Jjv', 'get_ServiceLocator_Tbo4JjvService', true],
            'App\\Controller\\Admin\\CategoryCrudController::delete' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\CategoryCrudController::deleteEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\CategoryCrudController::detail' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\CategoryCrudController::edit' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\CategoryCrudController::index' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\CategoryCrudController::new' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\CategoryCrudController::persistEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\CategoryCrudController::renderFilters' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\CategoryCrudController::updateEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\DashboardController::configureUserMenu' => ['privates', '.service_locator.q6hA_O0', 'get_ServiceLocator_Q6hAO0Service', true],
            'App\\Controller\\Admin\\ProductCrudController::autocomplete' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\ProductCrudController::batchDelete' => ['privates', '.service_locator.AWPr3oy', 'get_ServiceLocator_AWPr3oyService', true],
            'App\\Controller\\Admin\\ProductCrudController::configureActions' => ['privates', '.service_locator.CKlWSja', 'get_ServiceLocator_CKlWSjaService', true],
            'App\\Controller\\Admin\\ProductCrudController::configureAssets' => ['privates', '.service_locator.U4Bbnsn', 'get_ServiceLocator_U4BbnsnService', true],
            'App\\Controller\\Admin\\ProductCrudController::configureCrud' => ['privates', '.service_locator.4C0Bh8j', 'get_ServiceLocator_4C0Bh8jService', true],
            'App\\Controller\\Admin\\ProductCrudController::configureFilters' => ['privates', '.service_locator.Nt.ogDb', 'get_ServiceLocator_Nt_OgDbService', true],
            'App\\Controller\\Admin\\ProductCrudController::configureResponseParameters' => ['privates', '.service_locator.2dc0eaX', 'get_ServiceLocator_2dc0eaXService', true],
            'App\\Controller\\Admin\\ProductCrudController::createEditForm' => ['privates', '.service_locator.tbo4Jjv', 'get_ServiceLocator_Tbo4JjvService', true],
            'App\\Controller\\Admin\\ProductCrudController::createEditFormBuilder' => ['privates', '.service_locator.tbo4Jjv', 'get_ServiceLocator_Tbo4JjvService', true],
            'App\\Controller\\Admin\\ProductCrudController::createIndexQueryBuilder' => ['privates', '.service_locator.rAlqQ78', 'get_ServiceLocator_RAlqQ78Service', true],
            'App\\Controller\\Admin\\ProductCrudController::createNewForm' => ['privates', '.service_locator.tbo4Jjv', 'get_ServiceLocator_Tbo4JjvService', true],
            'App\\Controller\\Admin\\ProductCrudController::createNewFormBuilder' => ['privates', '.service_locator.tbo4Jjv', 'get_ServiceLocator_Tbo4JjvService', true],
            'App\\Controller\\Admin\\ProductCrudController::delete' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\ProductCrudController::deleteEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\ProductCrudController::detail' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\ProductCrudController::edit' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\ProductCrudController::index' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\ProductCrudController::new' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\ProductCrudController::persistEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\ProductCrudController::renderFilters' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\ProductCrudController::updateEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\UserCrudController::autocomplete' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\UserCrudController::batchDelete' => ['privates', '.service_locator.AWPr3oy', 'get_ServiceLocator_AWPr3oyService', true],
            'App\\Controller\\Admin\\UserCrudController::configureActions' => ['privates', '.service_locator.CKlWSja', 'get_ServiceLocator_CKlWSjaService', true],
            'App\\Controller\\Admin\\UserCrudController::configureAssets' => ['privates', '.service_locator.U4Bbnsn', 'get_ServiceLocator_U4BbnsnService', true],
            'App\\Controller\\Admin\\UserCrudController::configureCrud' => ['privates', '.service_locator.4C0Bh8j', 'get_ServiceLocator_4C0Bh8jService', true],
            'App\\Controller\\Admin\\UserCrudController::configureFilters' => ['privates', '.service_locator.Nt.ogDb', 'get_ServiceLocator_Nt_OgDbService', true],
            'App\\Controller\\Admin\\UserCrudController::configureResponseParameters' => ['privates', '.service_locator.2dc0eaX', 'get_ServiceLocator_2dc0eaXService', true],
            'App\\Controller\\Admin\\UserCrudController::createEditForm' => ['privates', '.service_locator.tbo4Jjv', 'get_ServiceLocator_Tbo4JjvService', true],
            'App\\Controller\\Admin\\UserCrudController::createEditFormBuilder' => ['privates', '.service_locator.tbo4Jjv', 'get_ServiceLocator_Tbo4JjvService', true],
            'App\\Controller\\Admin\\UserCrudController::createIndexQueryBuilder' => ['privates', '.service_locator.rAlqQ78', 'get_ServiceLocator_RAlqQ78Service', true],
            'App\\Controller\\Admin\\UserCrudController::createNewForm' => ['privates', '.service_locator.tbo4Jjv', 'get_ServiceLocator_Tbo4JjvService', true],
            'App\\Controller\\Admin\\UserCrudController::createNewFormBuilder' => ['privates', '.service_locator.tbo4Jjv', 'get_ServiceLocator_Tbo4JjvService', true],
            'App\\Controller\\Admin\\UserCrudController::delete' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\UserCrudController::deleteEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\UserCrudController::detail' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\UserCrudController::edit' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\UserCrudController::index' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\UserCrudController::new' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\UserCrudController::persistEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\UserCrudController::renderFilters' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\UserCrudController::updateEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\Admin\\CategoryCrudController:autocomplete' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\CategoryCrudController:batchDelete' => ['privates', '.service_locator.AWPr3oy', 'get_ServiceLocator_AWPr3oyService', true],
            'App\\Controller\\Admin\\CategoryCrudController:configureActions' => ['privates', '.service_locator.CKlWSja', 'get_ServiceLocator_CKlWSjaService', true],
            'App\\Controller\\Admin\\CategoryCrudController:configureAssets' => ['privates', '.service_locator.U4Bbnsn', 'get_ServiceLocator_U4BbnsnService', true],
            'App\\Controller\\Admin\\CategoryCrudController:configureCrud' => ['privates', '.service_locator.4C0Bh8j', 'get_ServiceLocator_4C0Bh8jService', true],
            'App\\Controller\\Admin\\CategoryCrudController:configureFilters' => ['privates', '.service_locator.Nt.ogDb', 'get_ServiceLocator_Nt_OgDbService', true],
            'App\\Controller\\Admin\\CategoryCrudController:configureResponseParameters' => ['privates', '.service_locator.2dc0eaX', 'get_ServiceLocator_2dc0eaXService', true],
            'App\\Controller\\Admin\\CategoryCrudController:createEditForm' => ['privates', '.service_locator.tbo4Jjv', 'get_ServiceLocator_Tbo4JjvService', true],
            'App\\Controller\\Admin\\CategoryCrudController:createEditFormBuilder' => ['privates', '.service_locator.tbo4Jjv', 'get_ServiceLocator_Tbo4JjvService', true],
            'App\\Controller\\Admin\\CategoryCrudController:createIndexQueryBuilder' => ['privates', '.service_locator.rAlqQ78', 'get_ServiceLocator_RAlqQ78Service', true],
            'App\\Controller\\Admin\\CategoryCrudController:createNewForm' => ['privates', '.service_locator.tbo4Jjv', 'get_ServiceLocator_Tbo4JjvService', true],
            'App\\Controller\\Admin\\CategoryCrudController:createNewFormBuilder' => ['privates', '.service_locator.tbo4Jjv', 'get_ServiceLocator_Tbo4JjvService', true],
            'App\\Controller\\Admin\\CategoryCrudController:delete' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\CategoryCrudController:deleteEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\CategoryCrudController:detail' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\CategoryCrudController:edit' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\CategoryCrudController:index' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\CategoryCrudController:new' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\CategoryCrudController:persistEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\CategoryCrudController:renderFilters' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\CategoryCrudController:updateEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\DashboardController:configureUserMenu' => ['privates', '.service_locator.q6hA_O0', 'get_ServiceLocator_Q6hAO0Service', true],
            'App\\Controller\\Admin\\ProductCrudController:autocomplete' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\ProductCrudController:batchDelete' => ['privates', '.service_locator.AWPr3oy', 'get_ServiceLocator_AWPr3oyService', true],
            'App\\Controller\\Admin\\ProductCrudController:configureActions' => ['privates', '.service_locator.CKlWSja', 'get_ServiceLocator_CKlWSjaService', true],
            'App\\Controller\\Admin\\ProductCrudController:configureAssets' => ['privates', '.service_locator.U4Bbnsn', 'get_ServiceLocator_U4BbnsnService', true],
            'App\\Controller\\Admin\\ProductCrudController:configureCrud' => ['privates', '.service_locator.4C0Bh8j', 'get_ServiceLocator_4C0Bh8jService', true],
            'App\\Controller\\Admin\\ProductCrudController:configureFilters' => ['privates', '.service_locator.Nt.ogDb', 'get_ServiceLocator_Nt_OgDbService', true],
            'App\\Controller\\Admin\\ProductCrudController:configureResponseParameters' => ['privates', '.service_locator.2dc0eaX', 'get_ServiceLocator_2dc0eaXService', true],
            'App\\Controller\\Admin\\ProductCrudController:createEditForm' => ['privates', '.service_locator.tbo4Jjv', 'get_ServiceLocator_Tbo4JjvService', true],
            'App\\Controller\\Admin\\ProductCrudController:createEditFormBuilder' => ['privates', '.service_locator.tbo4Jjv', 'get_ServiceLocator_Tbo4JjvService', true],
            'App\\Controller\\Admin\\ProductCrudController:createIndexQueryBuilder' => ['privates', '.service_locator.rAlqQ78', 'get_ServiceLocator_RAlqQ78Service', true],
            'App\\Controller\\Admin\\ProductCrudController:createNewForm' => ['privates', '.service_locator.tbo4Jjv', 'get_ServiceLocator_Tbo4JjvService', true],
            'App\\Controller\\Admin\\ProductCrudController:createNewFormBuilder' => ['privates', '.service_locator.tbo4Jjv', 'get_ServiceLocator_Tbo4JjvService', true],
            'App\\Controller\\Admin\\ProductCrudController:delete' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\ProductCrudController:deleteEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\ProductCrudController:detail' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\ProductCrudController:edit' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\ProductCrudController:index' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\ProductCrudController:new' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\ProductCrudController:persistEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\ProductCrudController:renderFilters' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\ProductCrudController:updateEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\UserCrudController:autocomplete' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\UserCrudController:batchDelete' => ['privates', '.service_locator.AWPr3oy', 'get_ServiceLocator_AWPr3oyService', true],
            'App\\Controller\\Admin\\UserCrudController:configureActions' => ['privates', '.service_locator.CKlWSja', 'get_ServiceLocator_CKlWSjaService', true],
            'App\\Controller\\Admin\\UserCrudController:configureAssets' => ['privates', '.service_locator.U4Bbnsn', 'get_ServiceLocator_U4BbnsnService', true],
            'App\\Controller\\Admin\\UserCrudController:configureCrud' => ['privates', '.service_locator.4C0Bh8j', 'get_ServiceLocator_4C0Bh8jService', true],
            'App\\Controller\\Admin\\UserCrudController:configureFilters' => ['privates', '.service_locator.Nt.ogDb', 'get_ServiceLocator_Nt_OgDbService', true],
            'App\\Controller\\Admin\\UserCrudController:configureResponseParameters' => ['privates', '.service_locator.2dc0eaX', 'get_ServiceLocator_2dc0eaXService', true],
            'App\\Controller\\Admin\\UserCrudController:createEditForm' => ['privates', '.service_locator.tbo4Jjv', 'get_ServiceLocator_Tbo4JjvService', true],
            'App\\Controller\\Admin\\UserCrudController:createEditFormBuilder' => ['privates', '.service_locator.tbo4Jjv', 'get_ServiceLocator_Tbo4JjvService', true],
            'App\\Controller\\Admin\\UserCrudController:createIndexQueryBuilder' => ['privates', '.service_locator.rAlqQ78', 'get_ServiceLocator_RAlqQ78Service', true],
            'App\\Controller\\Admin\\UserCrudController:createNewForm' => ['privates', '.service_locator.tbo4Jjv', 'get_ServiceLocator_Tbo4JjvService', true],
            'App\\Controller\\Admin\\UserCrudController:createNewFormBuilder' => ['privates', '.service_locator.tbo4Jjv', 'get_ServiceLocator_Tbo4JjvService', true],
            'App\\Controller\\Admin\\UserCrudController:delete' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\UserCrudController:deleteEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\UserCrudController:detail' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\UserCrudController:edit' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\UserCrudController:index' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\UserCrudController:new' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\UserCrudController:persistEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\UserCrudController:renderFilters' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\UserCrudController:updateEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\Admin\\CategoryCrudController::autocomplete' => '?',
            'App\\Controller\\Admin\\CategoryCrudController::batchDelete' => '?',
            'App\\Controller\\Admin\\CategoryCrudController::configureActions' => '?',
            'App\\Controller\\Admin\\CategoryCrudController::configureAssets' => '?',
            'App\\Controller\\Admin\\CategoryCrudController::configureCrud' => '?',
            'App\\Controller\\Admin\\CategoryCrudController::configureFilters' => '?',
            'App\\Controller\\Admin\\CategoryCrudController::configureResponseParameters' => '?',
            'App\\Controller\\Admin\\CategoryCrudController::createEditForm' => '?',
            'App\\Controller\\Admin\\CategoryCrudController::createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\CategoryCrudController::createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\CategoryCrudController::createNewForm' => '?',
            'App\\Controller\\Admin\\CategoryCrudController::createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\CategoryCrudController::delete' => '?',
            'App\\Controller\\Admin\\CategoryCrudController::deleteEntity' => '?',
            'App\\Controller\\Admin\\CategoryCrudController::detail' => '?',
            'App\\Controller\\Admin\\CategoryCrudController::edit' => '?',
            'App\\Controller\\Admin\\CategoryCrudController::index' => '?',
            'App\\Controller\\Admin\\CategoryCrudController::new' => '?',
            'App\\Controller\\Admin\\CategoryCrudController::persistEntity' => '?',
            'App\\Controller\\Admin\\CategoryCrudController::renderFilters' => '?',
            'App\\Controller\\Admin\\CategoryCrudController::updateEntity' => '?',
            'App\\Controller\\Admin\\DashboardController::configureUserMenu' => '?',
            'App\\Controller\\Admin\\ProductCrudController::autocomplete' => '?',
            'App\\Controller\\Admin\\ProductCrudController::batchDelete' => '?',
            'App\\Controller\\Admin\\ProductCrudController::configureActions' => '?',
            'App\\Controller\\Admin\\ProductCrudController::configureAssets' => '?',
            'App\\Controller\\Admin\\ProductCrudController::configureCrud' => '?',
            'App\\Controller\\Admin\\ProductCrudController::configureFilters' => '?',
            'App\\Controller\\Admin\\ProductCrudController::configureResponseParameters' => '?',
            'App\\Controller\\Admin\\ProductCrudController::createEditForm' => '?',
            'App\\Controller\\Admin\\ProductCrudController::createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\ProductCrudController::createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\ProductCrudController::createNewForm' => '?',
            'App\\Controller\\Admin\\ProductCrudController::createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\ProductCrudController::delete' => '?',
            'App\\Controller\\Admin\\ProductCrudController::deleteEntity' => '?',
            'App\\Controller\\Admin\\ProductCrudController::detail' => '?',
            'App\\Controller\\Admin\\ProductCrudController::edit' => '?',
            'App\\Controller\\Admin\\ProductCrudController::index' => '?',
            'App\\Controller\\Admin\\ProductCrudController::new' => '?',
            'App\\Controller\\Admin\\ProductCrudController::persistEntity' => '?',
            'App\\Controller\\Admin\\ProductCrudController::renderFilters' => '?',
            'App\\Controller\\Admin\\ProductCrudController::updateEntity' => '?',
            'App\\Controller\\Admin\\UserCrudController::autocomplete' => '?',
            'App\\Controller\\Admin\\UserCrudController::batchDelete' => '?',
            'App\\Controller\\Admin\\UserCrudController::configureActions' => '?',
            'App\\Controller\\Admin\\UserCrudController::configureAssets' => '?',
            'App\\Controller\\Admin\\UserCrudController::configureCrud' => '?',
            'App\\Controller\\Admin\\UserCrudController::configureFilters' => '?',
            'App\\Controller\\Admin\\UserCrudController::configureResponseParameters' => '?',
            'App\\Controller\\Admin\\UserCrudController::createEditForm' => '?',
            'App\\Controller\\Admin\\UserCrudController::createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\UserCrudController::createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\UserCrudController::createNewForm' => '?',
            'App\\Controller\\Admin\\UserCrudController::createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\UserCrudController::delete' => '?',
            'App\\Controller\\Admin\\UserCrudController::deleteEntity' => '?',
            'App\\Controller\\Admin\\UserCrudController::detail' => '?',
            'App\\Controller\\Admin\\UserCrudController::edit' => '?',
            'App\\Controller\\Admin\\UserCrudController::index' => '?',
            'App\\Controller\\Admin\\UserCrudController::new' => '?',
            'App\\Controller\\Admin\\UserCrudController::persistEntity' => '?',
            'App\\Controller\\Admin\\UserCrudController::renderFilters' => '?',
            'App\\Controller\\Admin\\UserCrudController::updateEntity' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\Admin\\CategoryCrudController:autocomplete' => '?',
            'App\\Controller\\Admin\\CategoryCrudController:batchDelete' => '?',
            'App\\Controller\\Admin\\CategoryCrudController:configureActions' => '?',
            'App\\Controller\\Admin\\CategoryCrudController:configureAssets' => '?',
            'App\\Controller\\Admin\\CategoryCrudController:configureCrud' => '?',
            'App\\Controller\\Admin\\CategoryCrudController:configureFilters' => '?',
            'App\\Controller\\Admin\\CategoryCrudController:configureResponseParameters' => '?',
            'App\\Controller\\Admin\\CategoryCrudController:createEditForm' => '?',
            'App\\Controller\\Admin\\CategoryCrudController:createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\CategoryCrudController:createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\CategoryCrudController:createNewForm' => '?',
            'App\\Controller\\Admin\\CategoryCrudController:createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\CategoryCrudController:delete' => '?',
            'App\\Controller\\Admin\\CategoryCrudController:deleteEntity' => '?',
            'App\\Controller\\Admin\\CategoryCrudController:detail' => '?',
            'App\\Controller\\Admin\\CategoryCrudController:edit' => '?',
            'App\\Controller\\Admin\\CategoryCrudController:index' => '?',
            'App\\Controller\\Admin\\CategoryCrudController:new' => '?',
            'App\\Controller\\Admin\\CategoryCrudController:persistEntity' => '?',
            'App\\Controller\\Admin\\CategoryCrudController:renderFilters' => '?',
            'App\\Controller\\Admin\\CategoryCrudController:updateEntity' => '?',
            'App\\Controller\\Admin\\DashboardController:configureUserMenu' => '?',
            'App\\Controller\\Admin\\ProductCrudController:autocomplete' => '?',
            'App\\Controller\\Admin\\ProductCrudController:batchDelete' => '?',
            'App\\Controller\\Admin\\ProductCrudController:configureActions' => '?',
            'App\\Controller\\Admin\\ProductCrudController:configureAssets' => '?',
            'App\\Controller\\Admin\\ProductCrudController:configureCrud' => '?',
            'App\\Controller\\Admin\\ProductCrudController:configureFilters' => '?',
            'App\\Controller\\Admin\\ProductCrudController:configureResponseParameters' => '?',
            'App\\Controller\\Admin\\ProductCrudController:createEditForm' => '?',
            'App\\Controller\\Admin\\ProductCrudController:createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\ProductCrudController:createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\ProductCrudController:createNewForm' => '?',
            'App\\Controller\\Admin\\ProductCrudController:createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\ProductCrudController:delete' => '?',
            'App\\Controller\\Admin\\ProductCrudController:deleteEntity' => '?',
            'App\\Controller\\Admin\\ProductCrudController:detail' => '?',
            'App\\Controller\\Admin\\ProductCrudController:edit' => '?',
            'App\\Controller\\Admin\\ProductCrudController:index' => '?',
            'App\\Controller\\Admin\\ProductCrudController:new' => '?',
            'App\\Controller\\Admin\\ProductCrudController:persistEntity' => '?',
            'App\\Controller\\Admin\\ProductCrudController:renderFilters' => '?',
            'App\\Controller\\Admin\\ProductCrudController:updateEntity' => '?',
            'App\\Controller\\Admin\\UserCrudController:autocomplete' => '?',
            'App\\Controller\\Admin\\UserCrudController:batchDelete' => '?',
            'App\\Controller\\Admin\\UserCrudController:configureActions' => '?',
            'App\\Controller\\Admin\\UserCrudController:configureAssets' => '?',
            'App\\Controller\\Admin\\UserCrudController:configureCrud' => '?',
            'App\\Controller\\Admin\\UserCrudController:configureFilters' => '?',
            'App\\Controller\\Admin\\UserCrudController:configureResponseParameters' => '?',
            'App\\Controller\\Admin\\UserCrudController:createEditForm' => '?',
            'App\\Controller\\Admin\\UserCrudController:createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\UserCrudController:createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\UserCrudController:createNewForm' => '?',
            'App\\Controller\\Admin\\UserCrudController:createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\UserCrudController:delete' => '?',
            'App\\Controller\\Admin\\UserCrudController:deleteEntity' => '?',
            'App\\Controller\\Admin\\UserCrudController:detail' => '?',
            'App\\Controller\\Admin\\UserCrudController:edit' => '?',
            'App\\Controller\\Admin\\UserCrudController:index' => '?',
            'App\\Controller\\Admin\\UserCrudController:new' => '?',
            'App\\Controller\\Admin\\UserCrudController:persistEntity' => '?',
            'App\\Controller\\Admin\\UserCrudController:renderFilters' => '?',
            'App\\Controller\\Admin\\UserCrudController:updateEntity' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
