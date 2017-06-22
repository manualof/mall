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
    }

    protected function extendSellerPermission()
    {

    }

    protected function extendUserPermission()
    {

    }
}
