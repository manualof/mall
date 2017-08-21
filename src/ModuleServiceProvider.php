<?php
/**
 * This file is part of Notadd.
 *
 * @author Qiyueshiyi <qiyueshiyi@outlook.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-03-22 16:02
 */
namespace Notadd\Mall;

use Notadd\Foundation\Module\Abstracts\Module;
use Notadd\Mall\Injections\Installer;
use Notadd\Mall\Injections\Uninstaller;

/**
 * Class ModuleServiceProvider.
 */
class ModuleServiceProvider extends Module
{
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
     * Boot module.
     */
    public function boot()
    {
        $this->loadMigrationsFrom(realpath(__DIR__ . '/../databases/migrations'));
        $this->loadTranslationsFrom(realpath(__DIR__ . '/../resources/translations'), 'mall');
        $this->loadViewsFrom(realpath(__DIR__ . '/../resources/views'), 'mall');
    }
}
