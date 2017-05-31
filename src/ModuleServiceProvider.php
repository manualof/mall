<?php
/**
 * This file is part of Notadd.
 *
 * @author Qiyueshiyi <qiyueshiyi@outlook.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-03-22 16:02
 */
namespace Notadd\Mall;

use Illuminate\Events\Dispatcher;
use Notadd\Mall\Injections\Installer;
use Notadd\Mall\Injections\Uninstaller;
use Notadd\Mall\Listeners\FlowRegister;
use Notadd\Mall\Listeners\PermissionGroupRegister;
use Notadd\Mall\Listeners\PermissionModuleRegister;
use Notadd\Mall\Listeners\PermissionRegister;
use Notadd\Mall\Listeners\PermissionTypeRegister;
use Notadd\Mall\Listeners\RouteRegister;
use Notadd\Mall\Listeners\CsrfTokenRegister;
use Notadd\Foundation\Module\Abstracts\Module;

/**
 * Class ModuleServiceProvider.
 */
class ModuleServiceProvider extends Module
{
    /**
     * Boot module.
     */
    public function boot()
    {
        $this->app->make(Dispatcher::class)->subscribe(CsrfTokenRegister::class);
        $this->app->make(Dispatcher::class)->subscribe(FlowRegister::class);
        $this->app->make(Dispatcher::class)->subscribe(PermissionGroupRegister::class);
        $this->app->make(Dispatcher::class)->subscribe(PermissionModuleRegister::class);
        $this->app->make(Dispatcher::class)->subscribe(PermissionRegister::class);
        $this->app->make(Dispatcher::class)->subscribe(PermissionTypeRegister::class);
        $this->app->make(Dispatcher::class)->subscribe(RouteRegister::class);
        $this->loadMigrationsFrom(realpath(__DIR__ . '/../databases/migrations'));
        $this->loadTranslationsFrom(realpath(__DIR__ . '/../resources/translations'), 'mall');
        $this->loadViewsFrom(realpath(__DIR__ . '/../resources/views'), 'mall');
        $this->publishes([
            realpath(__DIR__ . '/../resources/mixes/administration/dist/assets/mall/administration') => public_path('assets/mall/administration'),
            realpath(__DIR__ . '/../resources/mixes/seller/dist/assets/mall/seller') => public_path('assets/mall/seller'),
        ], 'public');
    }

    /**
     * Register module extra providers.
     */
    public function register()
    {
    }

    /**
     * @return array
     */
    public static function alias()
    {
        return [
            'notadd/mall',
            'notadd/seller',
        ];
    }

    /**
     * Description of module
     *
     * @return string
     */
    public static function description()
    {
        return 'Notadd 商城模块';
    }

    /**
     * Install for module.
     *
     * @return string
     */
    public static function install()
    {
        return Installer::class;
    }

    /**
     * Uninstall for module.
     *
     * @return string
     */
    public static function uninstall()
    {
        return Uninstaller::class;
    }

    /**
     * Name of module.
     *
     * @return string
     */
    public static function name()
    {
        return '商城';
    }

    /**
     * Version of module.
     *
     * @return string
     */
    public static function version()
    {
        return '1.0.0';
    }

    /**
     * Get script of extension.
     *
     * @return string|array
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public static function script()
    {
        return [
            asset('assets/mall/administration/js/module.min.js'),
            asset('assets/mall/seller/js/module.min.js'),
        ];
    }

    /**
     * Get stylesheet of extension.
     *
     * @return array
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public static function stylesheet()
    {
        return [
            asset('assets/mall/administration/css/module.min.css'),
            asset('assets/mall/seller/css/module.min.css'),
        ];
    }
}
