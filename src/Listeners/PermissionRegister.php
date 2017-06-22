<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <heshudong@ibenchu.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-05-27 20:43
 */
namespace Notadd\Mall\Listeners;

use Notadd\Foundation\Permission\Abstracts\PermissionRegister as AbstractPermissionRegister;

/**
 * Class PermissionRegister.
 */
class PermissionRegister extends AbstractPermissionRegister
{
    /**
     * Handle Permission Register.
     */
    public function handle()
    {
        $this->extendAdministrationPermission();
        $this->extendSellerPermission();
        $this->extendUserPermission();
    }

    protected function extendAdministrationPermission()
    {
        $this->manager->extend([
            'default'        => false,
            'description'    => '订单编辑权限',
            'group'          => 'order',
            'identification' => 'edit',
            'module'         => 'mall-administration',
        ]);
        $this->manager->extend([
            'default'        => false,
            'description'    => '订单列表权限',
            'group'          => 'order',
            'identification' => 'list',
            'module'         => 'mall-administration',
        ]);
        $this->manager->extend([
            'default'        => false,
            'description'    => '订单删除权限',
            'group'          => 'order',
            'identification' => 'order',
            'module'         => 'mall-administration',
        ]);
        $this->manager->extend([
            'default'        => false,
            'description'    => '订单删除权限',
            'group'          => 'order',
            'identification' => 'remove',
            'module'         => 'mall-administration',
        ]);
        $this->manager->extend([
            'default'        => false,
            'description'    => '订单恢复权限',
            'group'          => 'order',
            'identification' => 'restore',
            'module'         => 'mall-administration',
        ]);

        $this->manager->extend([
            'default'        => false,
            'description'    => '发货权限',
            'group'          => 'order-exchange',
            'identification' => 'send',
            'module'         => 'mall-administration',
        ]);
        $this->manager->extend([
            'default'        => false,
            'description'    => '换货列表权限',
            'group'          => 'order-exchange',
            'identification' => 'list',
            'module'         => 'mall-administration',
        ]);
        $this->manager->extend([
            'default'        => false,
            'description'    => '完结权限',
            'group'          => 'order-exchange',
            'identification' => 'finish',
            'module'         => 'mall-administration',
        ]);
        $this->manager->extend([
            'default'        => false,
            'description'    => '确认权限',
            'group'          => 'order-exchange',
            'identification' => 'confirm',
            'module'         => 'mall-administration',
        ]);

        $this->manager->extend([
            'default'        => false,
            'description'    => '列表权限',
            'group'          => 'order-express',
            'identification' => 'list',
            'module'         => 'mall-administration',
        ]);
        $this->manager->extend([
            'default'        => false,
            'description'    => '详情权限',
            'group'          => 'order-express',
            'identification' => 'trace',
            'module'         => 'mall-administration',
        ]);
        $this->manager->extend([
            'default'        => false,
            'description'    => '输入权限',
            'group'          => 'order-express',
            'identification' => 'typing',
            'module'         => 'mall-administration',
        ]);

        $this->manager->extend([
            'default'        => false,
            'description'    => '创建权限',
            'group'          => 'order-invoice',
            'identification' => 'create',
            'module'         => 'mall-administration',
        ]);
        $this->manager->extend([
            'default'        => false,
            'description'    => '编辑权限',
            'group'          => 'order-invoice',
            'identification' => 'edit',
            'module'         => 'mall-administration',
        ]);
        $this->manager->extend([
            'default'        => false,
            'description'    => '详情权限',
            'group'          => 'order-invoice',
            'identification' => 'invoice',
            'module'         => 'mall-administration',
        ]);
        $this->manager->extend([
            'default'        => false,
            'description'    => '列表权限',
            'group'          => 'order-invoice',
            'identification' => 'list',
            'module'         => 'mall-administration',
        ]);
        $this->manager->extend([
            'default'        => false,
            'description'    => '删除权限',
            'group'          => 'order-invoice',
            'identification' => 'remove',
            'module'         => 'mall-administration',
        ]);

        $this->manager->extend([
            'default'        => false,
            'description'    => '编辑权限',
            'group'          => 'order-rate',
            'identification' => 'edit',
            'module'         => 'mall-administration',
        ]);
        $this->manager->extend([
            'default'        => false,
            'description'    => '列表权限',
            'group'          => 'order-rate',
            'identification' => 'list',
            'module'         => 'mall-administration',
        ]);
        $this->manager->extend([
            'default'        => false,
            'description'    => '详情权限',
            'group'          => 'order-rate',
            'identification' => 'rate',
            'module'         => 'mall-administration',
        ]);

        $this->manager->extend([
            'default'        => false,
            'description'    => '确认权限',
            'group'          => 'order-refund',
            'identification' => 'confirm',
            'module'         => 'mall-administration',
        ]);
        $this->manager->extend([
            'default'        => false,
            'description'    => '完结权限',
            'group'          => 'order-refund',
            'identification' => 'finish',
            'module'         => 'mall-administration',
        ]);
        $this->manager->extend([
            'default'        => false,
            'description'    => '列表权限',
            'group'          => 'order-refund',
            'identification' => 'list',
            'module'         => 'mall-administration',
        ]);

        $this->manager->extend([
            'default'        => false,
            'description'    => '创建权限',
            'group'          => 'product',
            'identification' => 'create',
            'module'         => 'mall-administration',
        ]);
        $this->manager->extend([
            'default'        => false,
            'description'    => '编辑权限',
            'group'          => 'product',
            'identification' => 'edit',
            'module'         => 'mall-administration',
        ]);
        $this->manager->extend([
            'default'        => false,
            'description'    => '列表权限',
            'group'          => 'product',
            'identification' => 'list',
            'module'         => 'mall-administration',
        ]);
        $this->manager->extend([
            'default'        => false,
            'description'    => '详情权限',
            'group'          => 'product',
            'identification' => 'product',
            'module'         => 'mall-administration',
        ]);
        $this->manager->extend([
            'default'        => false,
            'description'    => '删除权限',
            'group'          => 'product',
            'identification' => 'remove',
            'module'         => 'mall-administration',
        ]);
        $this->manager->extend([
            'default'        => false,
            'description'    => '恢复权限',
            'group'          => 'product',
            'identification' => 'restore',
            'module'         => 'mall-administration',
        ]);

        $this->manager->extend([
            'default'        => false,
            'description'    => '通过权限',
            'group'          => 'product-brand',
            'identification' => 'access',
            'module'         => 'mall-administration',
        ]);
        $this->manager->extend([
            'default'        => false,
            'description'    => '详情权限',
            'group'          => 'product-brand',
            'identification' => 'brand',
            'module'         => 'mall-administration',
        ]);
        $this->manager->extend([
            'default'        => false,
            'description'    => '创建权限',
            'group'          => 'product-brand',
            'identification' => 'create',
            'module'         => 'mall-administration',
        ]);
        $this->manager->extend([
            'default'        => false,
            'description'    => '编辑权限',
            'group'          => 'product-brand',
            'identification' => 'edit',
            'module'         => 'mall-administration',
        ]);
        $this->manager->extend([
            'default'        => false,
            'description'    => '删除权限',
            'group'          => 'product-brand',
            'identification' => 'remove',
            'module'         => 'mall-administration',
        ]);

        $this->manager->extend([
            'default'        => false,
            'description'    => '详情权限',
            'group'          => 'product-category',
            'identification' => 'category',
            'module'         => 'mall-administration',
        ]);
        $this->manager->extend([
            'default'        => false,
            'description'    => '创建权限',
            'group'          => 'product-category',
            'identification' => 'create',
            'module'         => 'mall-administration',
        ]);
        $this->manager->extend([
            'default'        => false,
            'description'    => '编辑权限',
            'group'          => 'product-category',
            'identification' => 'edit',
            'module'         => 'mall-administration',
        ]);
        $this->manager->extend([
            'default'        => false,
            'description'    => '列表权限',
            'group'          => 'product-category',
            'identification' => 'list',
            'module'         => 'mall-administration',
        ]);
        $this->manager->extend([
            'default'        => false,
            'description'    => '删除权限',
            'group'          => 'product-category',
            'identification' => 'remove',
            'module'         => 'mall-administration',
        ]);
        $this->manager->extend([
            'default'        => false,
            'description'    => '恢复权限',
            'group'          => 'product-category',
            'identification' => 'restore',
            'module'         => 'mall-administration',
        ]);

        $this->manager->extend([
            'default'        => false,
            'description'    => '创建权限',
            'group'          => 'product-specification',
            'identification' => 'create',
            'module'         => 'mall-administration',
        ]);
        $this->manager->extend([
            'default'        => false,
            'description'    => '编辑权限',
            'group'          => 'product-specification',
            'identification' => 'edit',
            'module'         => 'mall-administration',
        ]);
        $this->manager->extend([
            'default'        => false,
            'description'    => '列表权限',
            'group'          => 'product-specification',
            'identification' => 'list',
            'module'         => 'mall-administration',
        ]);
        $this->manager->extend([
            'default'        => false,
            'description'    => '删除权限',
            'group'          => 'product-specification',
            'identification' => 'remove',
            'module'         => 'mall-administration',
        ]);
        $this->manager->extend([
            'default'        => false,
            'description'    => '详情权限',
            'group'          => 'product-specification',
            'identification' => 'specification',
            'module'         => 'mall-administration',
        ]);

        $this->manager->extend([
            'default'        => false,
            'description'    => '创建权限',
            'group'          => 'store',
            'identification' => 'create',
            'module'         => 'mall-administration',
        ]);
        $this->manager->extend([
            'default'        => false,
            'description'    => '编辑权限',
            'group'          => 'store',
            'identification' => 'edit',
            'module'         => 'mall-administration',
        ]);
        $this->manager->extend([
            'default'        => false,
            'description'    => '列表权限',
            'group'          => 'store',
            'identification' => 'list',
            'module'         => 'mall-administration',
        ]);
        $this->manager->extend([
            'default'        => false,
            'description'    => '删除权限',
            'group'          => 'store',
            'identification' => 'remove',
            'module'         => 'mall-administration',
        ]);
        $this->manager->extend([
            'default'        => false,
            'description'    => '恢复权限',
            'group'          => 'store',
            'identification' => 'restore',
            'module'         => 'mall-administration',
        ]);

        $this->manager->extend([
            'default'        => false,
            'description'    => '详情权限',
            'group'          => 'store-category',
            'identification' => 'category',
            'module'         => 'mall-administration',
        ]);
        $this->manager->extend([
            'default'        => false,
            'description'    => '创建权限',
            'group'          => 'store-category',
            'identification' => 'create',
            'module'         => 'mall-administration',
        ]);
        $this->manager->extend([
            'default'        => false,
            'description'    => '编辑权限',
            'group'          => 'store-category',
            'identification' => 'edit',
            'module'         => 'mall-administration',
        ]);
        $this->manager->extend([
            'default'        => false,
            'description'    => '列表权限',
            'group'          => 'store-category',
            'identification' => 'list',
            'module'         => 'mall-administration',
        ]);
        $this->manager->extend([
            'default'        => false,
            'description'    => '删除权限',
            'group'          => 'store-category',
            'identification' => 'remove',
            'module'         => 'mall-administration',
        ]);
        $this->manager->extend([
            'default'        => false,
            'description'    => '恢复权限',
            'group'          => 'store-category',
            'identification' => 'restore',
            'module'         => 'mall-administration',
        ]);

        $this->manager->extend([
            'default'        => false,
            'description'    => '详情权限',
            'group'          => 'store-dynamic',
            'identification' => 'dynamic',
            'module'         => 'mall-administration',
        ]);
        $this->manager->extend([
            'default'        => false,
            'description'    => '编辑权限',
            'group'          => 'store-dynamic',
            'identification' => 'edit',
            'module'         => 'mall-administration',
        ]);
        $this->manager->extend([
            'default'        => false,
            'description'    => '列表权限',
            'group'          => 'store-dynamic',
            'identification' => 'list',
            'module'         => 'mall-administration',
        ]);
        $this->manager->extend([
            'default'        => false,
            'description'    => '删除权限',
            'group'          => 'store-dynamic',
            'identification' => 'remove',
            'module'         => 'mall-administration',
        ]);

        $this->manager->extend([
            'default'        => false,
            'description'    => '编辑权限',
            'group'          => 'store-rate',
            'identification' => 'edit',
            'module'         => 'mall-administration',
        ]);
        $this->manager->extend([
            'default'        => false,
            'description'    => '列表权限',
            'group'          => 'store-rate',
            'identification' => 'list',
            'module'         => 'mall-administration',
        ]);
        $this->manager->extend([
            'default'        => false,
            'description'    => '详情权限',
            'group'          => 'store-rate',
            'identification' => 'rate',
            'module'         => 'mall-administration',
        ]);
    }

    protected function extendSellerPermission()
    {

    }

    protected function extendUserPermission()
    {

    }
}
