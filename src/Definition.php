<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <269044570@qq.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-07-01 15:50
 */
namespace Notadd\Mall;

use Notadd\Foundation\Module\Abstracts\Definition as AbstractDefinition;

/**
 * Class Definition.
 */
class Definition extends AbstractDefinition
{
    /**
     * Description of module.
     *
     * @return string
     */
    public function description()
    {
        return 'Notadd 商城模块';
    }

    /**
     * Entries for module.
     *
     * @return array
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function entries()
    {
        return [
            'administration' => [
                'notadd/mall'   => [
                    'permissions' => 'global::mall-administration::global::global',
                    'scripts'     => asset('assets/mall/administration/js/module.min.js'),
                    'stylesheets' => asset('assets/mall/administration/css/module.min.css'),
                ],
                'notadd/seller' => [
                    'permissions' => 'global::mall-seller::global::global',
                    'scripts'     => asset('assets/mall/seller/js/module.min.js'),
                    'stylesheets' => asset('assets/mall/seller/css/module.min.css'),
                ],
            ],
        ];
    }

    /**
     * Name of module.
     *
     * @return string
     */
    public function name()
    {
        return '商城';
    }

    /**
     * Requires of module.
     *
     * @return array
     */
    public function requires()
    {
        return [];
    }

    /**
     * Setting data definition.
     *
     * @return array
     */
    public function settings()
    {
        return [];
    }

    /**
     * Version of module.
     *
     * @return string
     */
    public function version()
    {
        return '1.0.0';
    }
}
