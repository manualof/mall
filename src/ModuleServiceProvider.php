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
use Notadd\Foundation\Http\Events\RequestHandled;
use Notadd\Foundation\Module\Abstracts\Module;
use Notadd\Mall\Injections\Installer;
use Notadd\Mall\Injections\Uninstaller;
use Notadd\Mall\Listeners\CsrfTokenRegister;
use Notadd\Mall\Listeners\FlowRegister;
use Notadd\Mall\Listeners\PermissionGroupRegister;
use Notadd\Mall\Listeners\PermissionModuleRegister;
use Notadd\Mall\Listeners\PermissionRegister;
use Notadd\Mall\Listeners\PermissionTypeRegister;
use Notadd\Mall\Listeners\RouteRegister;
use Symfony\Component\Yaml\Yaml;

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
        $data = collect();
        $data->put('name', '商城');
        $data->put('description', 'Notadd 商城模块');
        $data->put('author', [
            'twilroad',
            '269044570@qq.com',
        ]);
        $data->put('version', '1.0.0');
        $data->put('requires', [
            'extension' => [
                'ext-mall' => '0.2.*',
            ],
            'module'    => [
                'mall'    => '2.0.*',
                'content' => '3.0.*',
            ],
        ]);
        $data->put('entries', [
            'administration' => [
                'notadd/mall'   => [
                    'permissions' => 'global::mall-administration::global::global',
                    'scripts'     => 'assets/mall/administration/js/module.min.js',
                    'stylesheets' => 'assets/mall/administration/css/module.min.css',
                ],
                'notadd/seller' => [
                    'permissions' => 'global::mall-seller::global::global',
                    'scripts'     => 'assets/mall/seller/js/module.min.js',
                    'stylesheets' => 'assets/mall/seller/css/module.min.css',
                ],
            ],
        ]);
        $data->put('events', [
            'listeners'  => [
                RequestHandled::class => RouteRegister::class,
            ],
            'subscribes' => [
                CsrfTokenRegister::class,
                FlowRegister::class,
                PermissionGroupRegister::class,
                PermissionModuleRegister::class,
                RouteRegister::class,
            ],
        ]);
        $data->put('settings', [
            'content.seo.article.description'  => '',
            'content.seo.article.keyword'      => '',
            'content.seo.article.title'        => '',
            'content.seo.category.description' => '',
            'content.seo.category.keyword'     => '',
            'content.seo.category.title'       => '',
            'content.seo.page.description'     => '',
            'content.seo.page.keyword'         => '',
            'content.seo.page.title'           => '',
        ]);
        $data->put('permissions', [
            [
                'description'    => '商城后台权限',
                'groups'         => [
                    [
                        'description'    => '全局权限定义',
                        'identification' => 'global',
                        'name'           => '全局权限',
                        'permissions'    => [
                            [
                                'default'        => false,
                                'description'    => '商城后台权限',
                                'group'          => 'global',
                                'identification' => 'global',
                                'module'         => 'mall-administration',
                            ],
                        ],
                    ],
                    [
                        'description'    => '订单权限定义',
                        'identification' => 'order',
                        'name'           => '订单权限',
                        'permissions'    => [
                            [
                                'default'        => false,
                                'description'    => '订单编辑权限',
                                'group'          => 'order',
                                'identification' => 'edit',
                                'module'         => 'mall-administration',
                            ],
                            [
                                'default'        => false,
                                'description'    => '订单列表权限',
                                'group'          => 'order',
                                'identification' => 'list',
                                'module'         => 'mall-administration',
                            ],
                            [
                                'default'        => false,
                                'description'    => '订单删除权限',
                                'group'          => 'order',
                                'identification' => 'order',
                                'module'         => 'mall-administration',
                            ],
                            [
                                'default'        => false,
                                'description'    => '订单删除权限',
                                'group'          => 'order',
                                'identification' => 'remove',
                                'module'         => 'mall-administration',
                            ],
                            [
                                'default'        => false,
                                'description'    => '订单恢复权限',
                                'group'          => 'order',
                                'identification' => 'restore',
                                'module'         => 'mall-administration',
                            ],
                        ],
                    ],
                    [
                        'description'    => '订单换货权限定义',
                        'identification' => 'order-exchange',
                        'name'           => '订单换货权限',
                        'permissions'    => [
                            [
                                'default'        => false,
                                'description'    => '发货权限',
                                'group'          => 'order-exchange',
                                'identification' => 'send',
                                'module'         => 'mall-administration',
                            ],
                            [
                                'default'        => false,
                                'description'    => '换货列表权限',
                                'group'          => 'order-exchange',
                                'identification' => 'list',
                                'module'         => 'mall-administration',
                            ],
                            [
                                'default'        => false,
                                'description'    => '完结权限',
                                'group'          => 'order-exchange',
                                'identification' => 'finish',
                                'module'         => 'mall-administration',
                            ],
                            [
                                'default'        => false,
                                'description'    => '确认权限',
                                'group'          => 'order-exchange',
                                'identification' => 'confirm',
                                'module'         => 'mall-administration',
                            ],
                        ],
                    ],
                    [
                        'description'    => '订单物流权限定义',
                        'identification' => 'order-express',
                        'name'           => '订单物流权限',
                        'permissions'    => [
                            [
                                'default'        => false,
                                'description'    => '列表权限',
                                'group'          => 'order-express',
                                'identification' => 'list',
                                'module'         => 'mall-administration',
                            ],
                            [
                                'default'        => false,
                                'description'    => '详情权限',
                                'group'          => 'order-express',
                                'identification' => 'trace',
                                'module'         => 'mall-administration',
                            ],
                            [
                                'default'        => false,
                                'description'    => '输入权限',
                                'group'          => 'order-express',
                                'identification' => 'typing',
                                'module'         => 'mall-administration',
                            ],
                        ],
                    ],
                    [
                        'description'    => '订单发票权限定义',
                        'identification' => 'order-invoice',
                        'name'           => '订单发票权限',
                        'permissions'    => [
                            [
                                'default'        => false,
                                'description'    => '创建权限',
                                'group'          => 'order-invoice',
                                'identification' => 'create',
                                'module'         => 'mall-administration',
                            ],
                            [
                                'default'        => false,
                                'description'    => '编辑权限',
                                'group'          => 'order-invoice',
                                'identification' => 'edit',
                                'module'         => 'mall-administration',
                            ],
                            [
                                'default'        => false,
                                'description'    => '详情权限',
                                'group'          => 'order-invoice',
                                'identification' => 'invoice',
                                'module'         => 'mall-administration',
                            ],
                            [
                                'default'        => false,
                                'description'    => '列表权限',
                                'group'          => 'order-invoice',
                                'identification' => 'list',
                                'module'         => 'mall-administration',
                            ],
                            [
                                'default'        => false,
                                'description'    => '删除权限',
                                'group'          => 'order-invoice',
                                'identification' => 'remove',
                                'module'         => 'mall-administration',
                            ],
                        ],
                    ],
                    [
                        'description'    => '订单评价权限定义',
                        'identification' => 'order-rate',
                        'name'           => '订单评价权限',
                        'permissions'    => [
                            [
                                'default'        => false,
                                'description'    => '编辑权限',
                                'group'          => 'order-rate',
                                'identification' => 'edit',
                                'module'         => 'mall-administration',
                            ],
                            [
                                'default'        => false,
                                'description'    => '列表权限',
                                'group'          => 'order-rate',
                                'identification' => 'list',
                                'module'         => 'mall-administration',
                            ],
                            [
                                'default'        => false,
                                'description'    => '详情权限',
                                'group'          => 'order-rate',
                                'identification' => 'rate',
                                'module'         => 'mall-administration',
                            ],
                        ],
                    ],
                    [
                        'description'    => '订单退货权限定义',
                        'identification' => 'order-refund',
                        'name'           => '订单退货权限',
                        'permissions'    => [
                            [
                                'default'        => false,
                                'description'    => '确认权限',
                                'group'          => 'order-refund',
                                'identification' => 'confirm',
                                'module'         => 'mall-administration',
                            ],
                            [
                                'default'        => false,
                                'description'    => '完结权限',
                                'group'          => 'order-refund',
                                'identification' => 'finish',
                                'module'         => 'mall-administration',
                            ],
                            [
                                'default'        => false,
                                'description'    => '列表权限',
                                'group'          => 'order-refund',
                                'identification' => 'list',
                                'module'         => 'mall-administration',
                            ],
                        ],
                    ],
                    [
                        'description'    => '商品权限定义',
                        'identification' => 'product',
                        'name'           => '商品权限',
                        'permissions'    => [
                            [
                                'default'        => false,
                                'description'    => '创建权限',
                                'group'          => 'product',
                                'identification' => 'create',
                                'module'         => 'mall-administration',
                            ],
                            [
                                'default'        => false,
                                'description'    => '编辑权限',
                                'group'          => 'product',
                                'identification' => 'edit',
                                'module'         => 'mall-administration',
                            ],
                            [
                                'default'        => false,
                                'description'    => '列表权限',
                                'group'          => 'product',
                                'identification' => 'list',
                                'module'         => 'mall-administration',
                            ],
                            [
                                'default'        => false,
                                'description'    => '详情权限',
                                'group'          => 'product',
                                'identification' => 'product',
                                'module'         => 'mall-administration',
                            ],
                            [
                                'default'        => false,
                                'description'    => '删除权限',
                                'group'          => 'product',
                                'identification' => 'remove',
                                'module'         => 'mall-administration',
                            ],
                            [
                                'default'        => false,
                                'description'    => '恢复权限',
                                'group'          => 'product',
                                'identification' => 'restore',
                                'module'         => 'mall-administration',
                            ],
                        ],
                    ],
                    [
                        'description'    => '商品品牌权限定义',
                        'identification' => 'product-brand',
                        'name'           => '商品品牌权限',
                        'permissions'    => [
                            [
                                'default'        => false,
                                'description'    => '通过权限',
                                'group'          => 'product-brand',
                                'identification' => 'access',
                                'module'         => 'mall-administration',
                            ],
                            [
                                'default'        => false,
                                'description'    => '详情权限',
                                'group'          => 'product-brand',
                                'identification' => 'brand',
                                'module'         => 'mall-administration',
                            ],
                            [
                                'default'        => false,
                                'description'    => '创建权限',
                                'group'          => 'product-brand',
                                'identification' => 'create',
                                'module'         => 'mall-administration',
                            ],
                            [
                                'default'        => false,
                                'description'    => '编辑权限',
                                'group'          => 'product-brand',
                                'identification' => 'edit',
                                'module'         => 'mall-administration',
                            ],
                            [
                                'default'        => false,
                                'description'    => '列表权限',
                                'group'          => 'product-brand',
                                'identification' => 'list',
                                'module'         => 'mall-administration',
                            ],
                            [
                                'default'        => false,
                                'description'    => '删除权限',
                                'group'          => 'product-brand',
                                'identification' => 'remove',
                                'module'         => 'mall-administration',
                            ],
                        ],
                    ],
                    [
                        'description'    => '商品分类权限定义',
                        'identification' => 'product-category',
                        'name'           => '商品分类权限',
                        'permissions'    => [
                            [
                                'default'        => false,
                                'description'    => '详情权限',
                                'group'          => 'product-category',
                                'identification' => 'category',
                                'module'         => 'mall-administration',
                            ],
                            [
                                'default'        => false,
                                'description'    => '创建权限',
                                'group'          => 'product-category',
                                'identification' => 'create',
                                'module'         => 'mall-administration',
                            ],
                            [
                                'default'        => false,
                                'description'    => '编辑权限',
                                'group'          => 'product-category',
                                'identification' => 'edit',
                                'module'         => 'mall-administration',
                            ],
                            [
                                'default'        => false,
                                'description'    => '列表权限',
                                'group'          => 'product-category',
                                'identification' => 'list',
                                'module'         => 'mall-administration',
                            ],
                            [
                                'default'        => false,
                                'description'    => '删除权限',
                                'group'          => 'product-category',
                                'identification' => 'remove',
                                'module'         => 'mall-administration',
                            ],
                            [
                                'default'        => false,
                                'description'    => '恢复权限',
                                'group'          => 'product-category',
                                'identification' => 'restore',
                                'module'         => 'mall-administration',
                            ],
                        ],
                    ],
                    [
                        'description'    => '商品规格权限定义',
                        'identification' => 'product-specification',
                        'name'           => '商品规格权限',
                        'permissions'    => [
                            [
                                'default'        => false,
                                'description'    => '创建权限',
                                'group'          => 'product-specification',
                                'identification' => 'create',
                                'module'         => 'mall-administration',
                            ],
                            [
                                'default'        => false,
                                'description'    => '编辑权限',
                                'group'          => 'product-specification',
                                'identification' => 'edit',
                                'module'         => 'mall-administration',
                            ],
                            [
                                'default'        => false,
                                'description'    => '列表权限',
                                'group'          => 'product-specification',
                                'identification' => 'list',
                                'module'         => 'mall-administration',
                            ],
                            [
                                'default'        => false,
                                'description'    => '删除权限',
                                'group'          => 'product-specification',
                                'identification' => 'remove',
                                'module'         => 'mall-administration',
                            ],
                            [
                                'default'        => false,
                                'description'    => '详情权限',
                                'group'          => 'product-specification',
                                'identification' => 'specification',
                                'module'         => 'mall-administration',
                            ],
                        ],
                    ],
                    [
                        'description'    => '店铺权限定义',
                        'identification' => 'store',
                        'name'           => '店铺权限',
                        'permissions'    => [
                            [
                                'default'        => false,
                                'description'    => '创建权限',
                                'group'          => 'store',
                                'identification' => 'create',
                                'module'         => 'mall-administration',
                            ],
                            [
                                'default'        => false,
                                'description'    => '编辑权限',
                                'group'          => 'store',
                                'identification' => 'edit',
                                'module'         => 'mall-administration',
                            ],
                            [
                                'default'        => false,
                                'description'    => '列表权限',
                                'group'          => 'store',
                                'identification' => 'list',
                                'module'         => 'mall-administration',
                            ],
                            [
                                'default'        => false,
                                'description'    => '删除权限',
                                'group'          => 'store',
                                'identification' => 'remove',
                                'module'         => 'mall-administration',
                            ],
                            [
                                'default'        => false,
                                'description'    => '恢复权限',
                                'group'          => 'store',
                                'identification' => 'restore',
                                'module'         => 'mall-administration',
                            ],
                        ],
                    ],
                    [
                        'description'    => '店铺分类权限定义',
                        'identification' => 'store-category',
                        'name'           => '店铺分类权限',
                        'permissions'    => [
                            [
                                'default'        => false,
                                'description'    => '详情权限',
                                'group'          => 'store-category',
                                'identification' => 'category',
                                'module'         => 'mall-administration',
                            ],
                            [
                                'default'        => false,
                                'description'    => '创建权限',
                                'group'          => 'store-category',
                                'identification' => 'create',
                                'module'         => 'mall-administration',
                            ],
                            [
                                'default'        => false,
                                'description'    => '编辑权限',
                                'group'          => 'store-category',
                                'identification' => 'edit',
                                'module'         => 'mall-administration',
                            ],
                            [
                                'default'        => false,
                                'description'    => '列表权限',
                                'group'          => 'store-category',
                                'identification' => 'list',
                                'module'         => 'mall-administration',
                            ],
                            [
                                'default'        => false,
                                'description'    => '删除权限',
                                'group'          => 'store-category',
                                'identification' => 'remove',
                                'module'         => 'mall-administration',
                            ],
                            [
                                'default'        => false,
                                'description'    => '恢复权限',
                                'group'          => 'store-category',
                                'identification' => 'restore',
                                'module'         => 'mall-administration',
                            ],
                        ],
                    ],
                    [
                        'description'    => '店铺动态权限定义',
                        'identification' => 'store-dynamic',
                        'name'           => '店铺动态权限',
                        'permissions'    => [
                            [
                                'default'        => false,
                                'description'    => '详情权限',
                                'group'          => 'store-dynamic',
                                'identification' => 'dynamic',
                                'module'         => 'mall-administration',
                            ],
                            [
                                'default'        => false,
                                'description'    => '列表权限',
                                'group'          => 'store-dynamic',
                                'identification' => 'list',
                                'module'         => 'mall-administration',
                            ],
                            [
                                'default'        => false,
                                'description'    => '删除权限',
                                'group'          => 'store-dynamic',
                                'identification' => 'remove',
                                'module'         => 'mall-administration',
                            ],
                        ],
                    ],
                    [
                        'description'    => '店铺评价权限定义',
                        'identification' => 'store-rate',
                        'name'           => '店铺评价权限',
                        'permissions'    => [
                            [
                                'default'        => false,
                                'description'    => '编辑权限',
                                'group'          => 'store-rate',
                                'identification' => 'edit',
                                'module'         => 'mall-administration',
                            ],
                            [
                                'default'        => false,
                                'description'    => '列表权限',
                                'group'          => 'store-rate',
                                'identification' => 'list',
                                'module'         => 'mall-administration',
                            ],
                            [
                                'default'        => false,
                                'description'    => '详情权限',
                                'group'          => 'store-rate',
                                'identification' => 'rate',
                                'module'         => 'mall-administration',
                            ],
                        ],
                    ],
                    [
                        'description'    => '商家权限定义',
                        'identification' => 'seller',
                        'name'           => '商家权限',
                        'permissions'    => [
                        ],
                    ],
                ],
                'identification' => 'mall-administration',
                'name'           => '商城后台',
            ],
            [
                'description'    => '商城商家权限',
                'groups'         => [
                    [
                        'description'    => '全局权限定义',
                        'identification' => 'global',
                        'name'           => '全局权限',
                        'permissions'    => [
                            [
                                'default'        => false,
                                'description'    => '商家后台权限',
                                'group'          => 'global',
                                'identification' => 'global',
                                'module'         => 'mall-seller',
                            ],
                        ],
                    ],
                    [
                        'description'    => '订单权限定义',
                        'identification' => 'order',
                        'name'           => '订单权限',
                        'permissions'    => [
                            [
                                'default'        => false,
                                'description'    => '列表权限',
                                'group'          => 'order',
                                'identification' => 'list',
                                'module'         => 'mall-seller',
                            ],
                            [
                                'default'        => false,
                                'description'    => '详情权限',
                                'group'          => 'order',
                                'identification' => 'order',
                                'module'         => 'mall-seller',
                            ],
                            [
                                'default'        => false,
                                'description'    => '进程权限',
                                'group'          => 'order',
                                'identification' => 'process',
                                'module'         => 'mall-seller',
                            ],
                        ],
                    ],
                    [
                        'description'    => '商品权限定义',
                        'identification' => 'product',
                        'name'           => '商品权限',
                        'permissions'    => [
                            [
                                'default'        => false,
                                'description'    => '创建权限',
                                'group'          => 'product',
                                'identification' => 'create',
                                'module'         => 'mall-seller',
                            ],
                            [
                                'default'        => false,
                                'description'    => '编辑权限',
                                'group'          => 'product',
                                'identification' => 'edit',
                                'module'         => 'mall-seller',
                            ],
                            [
                                'default'        => false,
                                'description'    => '列表权限',
                                'group'          => 'product',
                                'identification' => 'list',
                                'module'         => 'mall-seller',
                            ],
                            [
                                'default'        => false,
                                'description'    => '详情权限',
                                'group'          => 'product',
                                'identification' => 'product',
                                'module'         => 'mall-seller',
                            ],
                            [
                                'default'        => false,
                                'description'    => '删除权限',
                                'group'          => 'product',
                                'identification' => 'remove',
                                'module'         => 'mall-seller',
                            ],
                            [
                                'default'        => false,
                                'description'    => '恢复权限',
                                'group'          => 'product',
                                'identification' => 'restore',
                                'module'         => 'mall-seller',
                            ],
                        ],
                    ],
                    [
                        'description'    => '商品分类权限定义',
                        'identification' => 'product-category',
                        'name'           => '商品分类权限',
                        'permissions'    => [
                            [
                                'default'        => false,
                                'description'    => '详情权限',
                                'group'          => 'product-category',
                                'identification' => 'category',
                                'module'         => 'mall-seller',
                            ],
                            [
                                'default'        => false,
                                'description'    => '创建权限',
                                'group'          => 'product-category',
                                'identification' => 'create',
                                'module'         => 'mall-seller',
                            ],
                            [
                                'default'        => false,
                                'description'    => '编辑权限',
                                'group'          => 'product-category',
                                'identification' => 'edit',
                                'module'         => 'mall-seller',
                            ],
                            [
                                'default'        => false,
                                'description'    => '列表权限',
                                'group'          => 'product-category',
                                'identification' => 'list',
                                'module'         => 'mall-seller',
                            ],
                            [
                                'default'        => false,
                                'description'    => '删除权限',
                                'group'          => 'product-category',
                                'identification' => 'remove',
                                'module'         => 'mall-seller',
                            ],
                        ],
                    ],
                    [
                        'description'    => '商品规格权限定义',
                        'identification' => 'product-specification',
                        'name'           => '商品规格权限',
                        'permissions'    => [
                            [
                                'default'        => false,
                                'description'    => '创建权限',
                                'group'          => 'product-specification',
                                'identification' => 'create',
                                'module'         => 'mall-seller',
                            ],
                            [
                                'default'        => false,
                                'description'    => '编辑权限',
                                'group'          => 'product-specification',
                                'identification' => 'edit',
                                'module'         => 'mall-seller',
                            ],
                            [
                                'default'        => false,
                                'description'    => '列表权限',
                                'group'          => 'product-specification',
                                'identification' => 'list',
                                'module'         => 'mall-seller',
                            ],
                            [
                                'default'        => false,
                                'description'    => '删除权限',
                                'group'          => 'product-specification',
                                'identification' => 'remove',
                                'module'         => 'mall-seller',
                            ],
                            [
                                'default'        => false,
                                'description'    => '详情权限',
                                'group'          => 'product-specification',
                                'identification' => 'specifications',
                                'module'         => 'mall-seller',
                            ],
                        ],
                    ],
                    [
                        'description'    => '商品订阅权限定义',
                        'identification' => 'product-subscribe',
                        'name'           => '商品订阅权限',
                        'permissions'    => [
                            [
                                'default'        => false,
                                'description'    => '列表权限',
                                'group'          => 'product-subscribe',
                                'identification' => 'list',
                                'module'         => 'mall-seller',
                            ],
                            [
                                'default'        => false,
                                'description'    => '删除权限',
                                'group'          => 'product-subscribe',
                                'identification' => 'remove',
                                'module'         => 'mall-seller',
                            ],
                        ],
                    ],
                    [
                        'description'    => '商店权限定义',
                        'identification' => 'store',
                        'name'           => '商店权限',
                        'permissions'    => [
                            [
                                'default'        => false,
                                'description'    => '上新权限',
                                'group'          => 'store',
                                'identification' => 'renew',
                                'module'         => 'mall-seller',
                            ],
                            [
                                'default'        => false,
                                'description'    => '详情权限',
                                'group'          => 'store',
                                'identification' => 'store',
                                'module'         => 'mall-seller',
                            ],
                        ],
                    ],
                    [
                        'description'    => '商店品牌权限定义',
                        'identification' => 'store-brand',
                        'name'           => '商店品牌权限',
                        'permissions'    => [
                            [
                                'default'        => false,
                                'description'    => '申请权限',
                                'group'          => 'store-brand',
                                'identification' => 'apply',
                                'module'         => 'mall-seller',
                            ],
                            [
                                'default'        => false,
                                'description'    => '详情权限',
                                'group'          => 'store-brand',
                                'identification' => 'brand',
                                'module'         => 'mall-seller',
                            ],
                            [
                                'default'        => false,
                                'description'    => '编辑权限',
                                'group'          => 'store-brand',
                                'identification' => 'edit',
                                'module'         => 'mall-seller',
                            ],
                            [
                                'default'        => false,
                                'description'    => '列表权限',
                                'group'          => 'store-brand',
                                'identification' => 'list',
                                'module'         => 'mall-seller',
                            ],
                            [
                                'default'        => false,
                                'description'    => '撤销权限',
                                'group'          => 'store-brand',
                                'identification' => 'revoke',
                                'module'         => 'mall-seller',
                            ],
                        ],
                    ],
                    [
                        'description'    => '商店分类权限定义',
                        'identification' => 'store-category',
                        'name'           => '商店分类权限',
                        'permissions'    => [
                            [
                                'default'        => false,
                                'description'    => '详情权限',
                                'group'          => 'store-category',
                                'identification' => 'category',
                                'module'         => 'mall-seller',
                            ],
                            [
                                'default'        => false,
                                'description'    => '创建权限',
                                'group'          => 'store-category',
                                'identification' => 'create',
                                'module'         => 'mall-seller',
                            ],
                            [
                                'default'        => false,
                                'description'    => '编辑权限',
                                'group'          => 'store-category',
                                'identification' => 'edit',
                                'module'         => 'mall-seller',
                            ],
                            [
                                'default'        => false,
                                'description'    => '列表权限',
                                'group'          => 'store-category',
                                'identification' => 'list',
                                'module'         => 'mall-seller',
                            ],
                            [
                                'default'        => false,
                                'description'    => '删除权限',
                                'group'          => 'store-category',
                                'identification' => 'remove',
                                'module'         => 'mall-seller',
                            ],
                        ],
                    ],
                    [
                        'description'    => '商店动态权限定义',
                        'identification' => 'store-dynamic',
                        'name'           => '商店动态权限',
                        'permissions'    => [
                            [
                                'default'        => false,
                                'description'    => '配置权限',
                                'group'          => 'store-dynamic',
                                'identification' => 'configuration',
                                'module'         => 'mall-seller',
                            ],
                            [
                                'default'        => false,
                                'description'    => '创建权限',
                                'group'          => 'store-dynamic',
                                'identification' => 'create',
                                'module'         => 'mall-seller',
                            ],
                            [
                                'default'        => false,
                                'description'    => '详情权限',
                                'group'          => 'store-dynamic',
                                'identification' => 'dynamic',
                                'module'         => 'mall-seller',
                            ],
                            [
                                'default'        => false,
                                'description'    => '编辑权限',
                                'group'          => 'store-dynamic',
                                'identification' => 'edit',
                                'module'         => 'mall-seller',
                            ],
                            [
                                'default'        => false,
                                'description'    => '列表权限',
                                'group'          => 'store-dynamic',
                                'identification' => 'list',
                                'module'         => 'mall-seller',
                            ],
                            [
                                'default'        => false,
                                'description'    => '删除权限',
                                'group'          => 'store-dynamic',
                                'identification' => 'remove',
                                'module'         => 'mall-seller',
                            ],
                            [
                                'default'        => false,
                                'description'    => '恢复权限',
                                'group'          => 'store-dynamic',
                                'identification' => 'restore',
                                'module'         => 'mall-seller',
                            ],
                        ],
                    ],
                    [
                        'description'    => '商店导航权限定义',
                        'identification' => 'store-navigation',
                        'name'           => '商店导航权限',
                        'permissions'    => [
                            [
                                'default'        => false,
                                'description'    => '创建权限',
                                'group'          => 'store-navigation',
                                'identification' => 'create',
                                'module'         => 'mall-seller',
                            ],
                            [
                                'default'        => false,
                                'description'    => '编辑权限',
                                'group'          => 'store-navigation',
                                'identification' => 'edit',
                                'module'         => 'mall-seller',
                            ],
                            [
                                'default'        => false,
                                'description'    => '列表权限',
                                'group'          => 'store-navigation',
                                'identification' => 'list',
                                'module'         => 'mall-seller',
                            ],
                            [
                                'default'        => false,
                                'description'    => '详情权限',
                                'group'          => 'store-navigation',
                                'identification' => 'navigation',
                                'module'         => 'mall-seller',
                            ],
                            [
                                'default'        => false,
                                'description'    => '删除权限',
                                'group'          => 'store-navigation',
                                'identification' => 'remove',
                                'module'         => 'mall-seller',
                            ],
                        ],
                    ],
                    [
                        'description'    => '商家权限定义',
                        'identification' => 'seller',
                        'name'           => '商家权限',
                        'permissions'    => [
                            [
                                'default'        => false,
                                'description'    => '删除权限',
                                'group'          => 'store-navigation',
                                'identification' => 'remove',
                                'module'         => 'mall-seller',
                            ],
                        ],
                    ],
                ],
                'identification' => 'mall-seller',
                'name'           => '商城商家',
            ],
            [
                'description'    => '商城用户权限',
                'groups'         => [
                    [
                        'description'    => '全局权限定义',
                        'identification' => 'global',
                        'name'           => '全局权限',
                        'permissions'    => [
                            [
                                'default'        => false,
                                'description'    => '删除权限',
                                'group'          => 'store-navigation',
                                'identification' => 'remove',
                                'module'         => 'mall-seller',
                            ],
                        ],
                    ],
                    [
                        'description'    => '商品权限定义',
                        'identification' => 'product',
                        'name'           => '商品权限',
                        'permissions'    => [
                            [
                                'default'        => false,
                                'description'    => '删除权限',
                                'group'          => 'store-navigation',
                                'identification' => 'remove',
                                'module'         => 'mall-seller',
                            ],
                        ],
                    ],
                    [
                        'description'    => '商店权限定义',
                        'identification' => 'store',
                        'name'           => '商店权限',
                        'permissions'    => [
                            [
                                'default'        => false,
                                'description'    => '删除权限',
                                'group'          => 'store-navigation',
                                'identification' => 'remove',
                                'module'         => 'mall-seller',
                            ],
                        ],
                    ],
                    [
                        'description'    => '商家权限定义',
                        'identification' => 'seller',
                        'name'           => '商家权限',
                        'permissions'    => [
                            [
                                'default'        => false,
                                'description'    => '删除权限',
                                'group'          => 'store-navigation',
                                'identification' => 'remove',
                                'module'         => 'mall-seller',
                            ],
                        ],
                    ],
                ],
                'identification' => 'mall-user',
                'name'           => '商城用户',
            ],
        ]);
        $data->put('pages', [
            'configurations' => [
                'initialization' => [
                    'tabs'  => true,
                    'title' => '配置页面',
                ],
                'tabs'           => [
                    'configuration' => [
                        'default' => true,
                        'show'    => true,
                        'title'   => '配置',
                        'fields'  => [
                            'title'       => [
                                'default'   => '',
                                'label'     => '标题',
                                'key'       => '',
                                'required'  => true,
                                'type'      => 'input',
                                'validates' => [
                                    [
                                        'message'  => '',
                                        'required' => true,
                                        'trigger'  => 'change',
                                        'type'     => 'string',
                                    ],
                                ],
                            ],
                            'description' => [
                                'default'   => '',
                                'label'     => '描述',
                                'key'       => '',
                                'required'  => true,
                                'type'      => 'input',
                                'validates' => [
                                    [
                                        'message'  => '',
                                        'required' => true,
                                        'trigger'  => 'change',
                                        'type'     => 'string',
                                    ],
                                ],
                            ],
                            'keyword'     => [
                                'default'   => '',
                                'label'     => '关键字',
                                'key'       => '',
                                'required'  => true,
                                'type'      => 'input',
                                'validates' => [
                                    [
                                        'message'  => '',
                                        'required' => true,
                                        'trigger'  => 'change',
                                        'type'     => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ]);

        file_put_contents($this->app->environmentPath() . DIRECTORY_SEPARATOR . 'configuration.yaml', $this->app->make(Yaml::class)->dump($data->toArray(), 10));
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
            realpath(__DIR__ . '/../resources/mixes/foreground/dist/assets/mall/foreground')         => public_path('assets/mall/foreground'),
            realpath(__DIR__ . '/../resources/mixes/seller/dist/assets/mall/seller')                 => public_path('assets/mall/seller'),
        ], 'public');
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
}
