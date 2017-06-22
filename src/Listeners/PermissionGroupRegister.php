<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <heshudong@ibenchu.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-05-26 11:02
 */
namespace Notadd\Mall\Listeners;

use Notadd\Foundation\Permission\Abstracts\PermissionGroupRegister as AbstractPermissionGroupRegister;

/**
 * Class PermissionGroupRegister.
 */
class PermissionGroupRegister extends AbstractPermissionGroupRegister
{
    /**
     * Handle Permission Register.
     */
    public function handle()
    {
        $this->extendAdministrationGroup();
        $this->extendSellerGroup();
        $this->extendUserGroup();
    }

    protected function extendAdministrationGroup()
    {
        $this->manager->extend([
            'description'    => '全局权限定义',
            'identification' => 'global',
            'module'         => 'mall-administration',
            'name'           => '全局权限',
        ]);
        $this->manager->extend([
            'description'    => '订单权限定义',
            'identification' => 'order',
            'module'         => 'mall-administration',
            'name'           => '订单权限',
        ]);
        $this->manager->extend([
            'description'    => '订单换货权限定义',
            'identification' => 'order-exchange',
            'module'         => 'mall-administration',
            'name'           => '订单换货权限',
        ]);
        $this->manager->extend([
            'description'    => '订单物流权限定义',
            'identification' => 'order-express',
            'module'         => 'mall-administration',
            'name'           => '订单物流权限',
        ]);
        $this->manager->extend([
            'description'    => '订单发票权限定义',
            'identification' => 'order-invoice',
            'module'         => 'mall-administration',
            'name'           => '订单发票权限',
        ]);
        $this->manager->extend([
            'description'    => '订单评价权限定义',
            'identification' => 'order-rate',
            'module'         => 'mall-administration',
            'name'           => '订单评价权限',
        ]);
        $this->manager->extend([
            'description'    => '订单退货权限定义',
            'identification' => 'order-refund',
            'module'         => 'mall-administration',
            'name'           => '订单退货权限',
        ]);
        $this->manager->extend([
            'description'    => '商品权限定义',
            'identification' => 'product',
            'module'         => 'mall-administration',
            'name'           => '商品权限',
        ]);
        $this->manager->extend([
            'description'    => '商品品牌权限定义',
            'identification' => 'product-brand',
            'module'         => 'mall-administration',
            'name'           => '商品品牌权限',
        ]);
        $this->manager->extend([
            'description'    => '商品分类权限定义',
            'identification' => 'product-category',
            'module'         => 'mall-administration',
            'name'           => '商品分类权限',
        ]);
        $this->manager->extend([
            'description'    => '店铺权限定义',
            'identification' => 'store',
            'module'         => 'mall-administration',
            'name'           => '店铺权限',
        ]);
        $this->manager->extend([
            'description'    => '商家权限定义',
            'identification' => 'seller',
            'module'         => 'mall-administration',
            'name'           => '商家权限',
        ]);
    }

    protected function extendSellerGroup()
    {
        $this->manager->extend([
            'description'    => '全局权限定义',
            'identification' => 'global',
            'module'         => 'mall-seller',
            'name'           => '全局权限',
        ]);
        $this->manager->extend([
            'description'    => '商品权限定义',
            'identification' => 'product',
            'module'         => 'mall-seller',
            'name'           => '商品权限',
        ]);
        $this->manager->extend([
            'description'    => '商店权限定义',
            'identification' => 'store',
            'module'         => 'mall-seller',
            'name'           => '商店权限',
        ]);
        $this->manager->extend([
            'description'    => '商家权限定义',
            'identification' => 'seller',
            'module'         => 'mall-seller',
            'name'           => '商家权限',
        ]);
    }

    protected function extendUserGroup()
    {
        $this->manager->extend([
            'description'    => '全局权限定义',
            'identification' => 'global',
            'module'         => 'mall-user',
            'name'           => '全局权限',
        ]);
        $this->manager->extend([
            'description'    => '商品权限定义',
            'identification' => 'product',
            'module'         => 'mall-user',
            'name'           => '商品权限',
        ]);
        $this->manager->extend([
            'description'    => '商店权限定义',
            'identification' => 'store',
            'module'         => 'mall-user',
            'name'           => '商店权限',
        ]);
        $this->manager->extend([
            'description'    => '商家权限定义',
            'identification' => 'seller',
            'module'         => 'mall-user',
            'name'           => '商家权限',
        ]);
    }
}
