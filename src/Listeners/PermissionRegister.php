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
        $this->extendOrderPermissionForAdministration();
        $this->extendOrderExchangePermissionForAdministration();
        $this->extendOrderExpressPermissionForAdministration();
        $this->extendOrderInvoicePermissionForAdministration();
        $this->extendOrderRatePermissionForAdministration();
        $this->extendOrderRefundPermissionForAdministration();
        $this->extendProductPermissionForAdministration();
        $this->extendProductBrandPermissionForAdministration();
        $this->extendProductCategoryPermissionForAdministration();
        $this->extendProductSpecificationPermissionForAdministration();
        $this->extendStorePermissionForAdministration();
        $this->extendStoreCategoryPermissionForAdministration();
        $this->extendStoreDynamicPermissionForAdministration();
        $this->extendStoreRatePermissionForAdministration();
    }

    protected function extendOrderPermissionForAdministration()
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
    }

    protected function extendOrderExchangePermissionForAdministration()
    {
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
    }

    protected function extendOrderExpressPermissionForAdministration()
    {
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
    }

    protected function extendOrderInvoicePermissionForAdministration()
    {
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

    protected function extendOrderRatePermissionForAdministration()
    {
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
    }

    protected function extendOrderRefundPermissionForAdministration()
    {
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
    }

    protected function extendProductPermissionForAdministration()
    {
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
    }

    protected function extendProductBrandPermissionForAdministration()
    {
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
    }

    protected function extendProductCategoryPermissionForAdministration()
    {
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
    }

    protected function extendProductSpecificationPermissionForAdministration()
    {
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
    }

    protected function extendStorePermissionForAdministration()
    {
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
    }

    protected function extendStoreCategoryPermissionForAdministration()
    {
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
    }

    protected function extendStoreDynamicPermissionForAdministration()
    {
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
    }

    protected function extendStoreRatePermissionForAdministration()
    {
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
        $this->extendOrderPermissionForSeller();
        $this->extendProductSpecificationPermissionForSeller();
        $this->extendProductSubscribePermissionForSeller();
        $this->extendStorePermissionForSeller();
        $this->extendStoreBrandPermissionForSeller();
        $this->extendStoreCategoryPermissionForSeller();
        $this->extendStoreDynamicPermissionForSeller();
        $this->extendStoreNavigationPermissionForSeller();
    }

    protected function extendOrderPermissionForSeller()
    {
        $this->manager->extend([
            'default'        => false,
            'description'    => '列表权限',
            'group'          => 'order',
            'identification' => 'list',
            'module'         => 'mall-seller',
        ]);
        $this->manager->extend([
            'default'        => false,
            'description'    => '详情权限',
            'group'          => 'order',
            'identification' => 'order',
            'module'         => 'mall-seller',
        ]);
        $this->manager->extend([
            'default'        => false,
            'description'    => '进程权限',
            'group'          => 'order',
            'identification' => 'process',
            'module'         => 'mall-seller',
        ]);
    }

    protected function extendProductPermissionForSeller()
    {
        $this->manager->extend([
            'default'        => false,
            'description'    => '创建权限',
            'group'          => 'product',
            'identification' => 'create',
            'module'         => 'mall-seller',
        ]);
        $this->manager->extend([
            'default'        => false,
            'description'    => '编辑权限',
            'group'          => 'product',
            'identification' => 'edit',
            'module'         => 'mall-seller',
        ]);
        $this->manager->extend([
            'default'        => false,
            'description'    => '列表权限',
            'group'          => 'product',
            'identification' => 'list',
            'module'         => 'mall-seller',
        ]);
        $this->manager->extend([
            'default'        => false,
            'description'    => '详情权限',
            'group'          => 'product',
            'identification' => 'product',
            'module'         => 'mall-seller',
        ]);
        $this->manager->extend([
            'default'        => false,
            'description'    => '删除权限',
            'group'          => 'product',
            'identification' => 'remove',
            'module'         => 'mall-seller',
        ]);
        $this->manager->extend([
            'default'        => false,
            'description'    => '恢复权限',
            'group'          => 'product',
            'identification' => 'restore',
            'module'         => 'mall-seller',
        ]);
    }

    protected function extendProductSpecificationPermissionForSeller()
    {
        $this->manager->extend([
            'default'        => false,
            'description'    => '创建权限',
            'group'          => 'product-specification',
            'identification' => 'create',
            'module'         => 'mall-seller',
        ]);
        $this->manager->extend([
            'default'        => false,
            'description'    => '编辑权限',
            'group'          => 'product-specification',
            'identification' => 'edit',
            'module'         => 'mall-seller',
        ]);
        $this->manager->extend([
            'default'        => false,
            'description'    => '列表权限',
            'group'          => 'product-specification',
            'identification' => 'list',
            'module'         => 'mall-seller',
        ]);
        $this->manager->extend([
            'default'        => false,
            'description'    => '删除权限',
            'group'          => 'product-specification',
            'identification' => 'remove',
            'module'         => 'mall-seller',
        ]);
        $this->manager->extend([
            'default'        => false,
            'description'    => '详情权限',
            'group'          => 'product-specification',
            'identification' => 'specifications',
            'module'         => 'mall-seller',
        ]);
    }

    protected function extendProductSubscribePermissionForSeller()
    {
        $this->manager->extend([
            'default'        => false,
            'description'    => '列表权限',
            'group'          => 'product-subscribe',
            'identification' => 'list',
            'module'         => 'mall-seller',
        ]);
        $this->manager->extend([
            'default'        => false,
            'description'    => '删除权限',
            'group'          => 'product-subscribe',
            'identification' => 'remove',
            'module'         => 'mall-seller',
        ]);
    }

    protected function extendStorePermissionForSeller()
    {
        $this->manager->extend([
            'default'        => false,
            'description'    => '上新权限',
            'group'          => 'store',
            'identification' => 'renew',
            'module'         => 'mall-seller',
        ]);
        $this->manager->extend([
            'default'        => false,
            'description'    => '详情权限',
            'group'          => 'store',
            'identification' => 'store',
            'module'         => 'mall-seller',
        ]);
    }

    protected function extendStoreBrandPermissionForSeller()
    {
        $this->manager->extend([
            'default'        => false,
            'description'    => '申请权限',
            'group'          => 'store-brand',
            'identification' => 'apply',
            'module'         => 'mall-seller',
        ]);
        $this->manager->extend([
            'default'        => false,
            'description'    => '详情权限',
            'group'          => 'store-brand',
            'identification' => 'brand',
            'module'         => 'mall-seller',
        ]);
        $this->manager->extend([
            'default'        => false,
            'description'    => '编辑权限',
            'group'          => 'store-brand',
            'identification' => 'edit',
            'module'         => 'mall-seller',
        ]);
        $this->manager->extend([
            'default'        => false,
            'description'    => '列表权限',
            'group'          => 'store-brand',
            'identification' => 'list',
            'module'         => 'mall-seller',
        ]);
        $this->manager->extend([
            'default'        => false,
            'description'    => '撤销权限',
            'group'          => 'store-brand',
            'identification' => 'revoke',
            'module'         => 'mall-seller',
        ]);
    }

    protected function extendStoreCategoryPermissionForSeller()
    {
        $this->manager->extend([
            'default'        => false,
            'description'    => '详情权限',
            'group'          => 'store-category',
            'identification' => 'category',
            'module'         => 'mall-seller',
        ]);
        $this->manager->extend([
            'default'        => false,
            'description'    => '创建权限',
            'group'          => 'store-category',
            'identification' => 'create',
            'module'         => 'mall-seller',
        ]);
        $this->manager->extend([
            'default'        => false,
            'description'    => '编辑权限',
            'group'          => 'store-category',
            'identification' => 'edit',
            'module'         => 'mall-seller',
        ]);
        $this->manager->extend([
            'default'        => false,
            'description'    => '列表权限',
            'group'          => 'store-category',
            'identification' => 'list',
            'module'         => 'mall-seller',
        ]);
        $this->manager->extend([
            'default'        => false,
            'description'    => '删除权限',
            'group'          => 'store-category',
            'identification' => 'remove',
            'module'         => 'mall-seller',
        ]);
    }

    protected function extendStoreDynamicPermissionForSeller()
    {
        $this->manager->extend([
            'default'        => false,
            'description'    => '配置权限',
            'group'          => 'store-dynamic',
            'identification' => 'configuration',
            'module'         => 'mall-seller',
        ]);
        $this->manager->extend([
            'default'        => false,
            'description'    => '创建权限',
            'group'          => 'store-dynamic',
            'identification' => 'create',
            'module'         => 'mall-seller',
        ]);
        $this->manager->extend([
            'default'        => false,
            'description'    => '详情权限',
            'group'          => 'store-dynamic',
            'identification' => 'dynamic',
            'module'         => 'mall-seller',
        ]);
        $this->manager->extend([
            'default'        => false,
            'description'    => '编辑权限',
            'group'          => 'store-dynamic',
            'identification' => 'edit',
            'module'         => 'mall-seller',
        ]);
        $this->manager->extend([
            'default'        => false,
            'description'    => '列表权限',
            'group'          => 'store-dynamic',
            'identification' => 'list',
            'module'         => 'mall-seller',
        ]);
        $this->manager->extend([
            'default'        => false,
            'description'    => '删除权限',
            'group'          => 'store-dynamic',
            'identification' => 'remove',
            'module'         => 'mall-seller',
        ]);
        $this->manager->extend([
            'default'        => false,
            'description'    => '恢复权限',
            'group'          => 'store-dynamic',
            'identification' => 'restore',
            'module'         => 'mall-seller',
        ]);
    }

    protected function extendStoreNavigationPermissionForSeller()
    {
        $this->manager->extend([
            'default'        => false,
            'description'    => '创建权限',
            'group'          => 'store-navigation',
            'identification' => 'create',
            'module'         => 'mall-seller',
        ]);
        $this->manager->extend([
            'default'        => false,
            'description'    => '编辑权限',
            'group'          => 'store-navigation',
            'identification' => 'edit',
            'module'         => 'mall-seller',
        ]);
        $this->manager->extend([
            'default'        => false,
            'description'    => '列表权限',
            'group'          => 'store-navigation',
            'identification' => 'list',
            'module'         => 'mall-seller',
        ]);
        $this->manager->extend([
            'default'        => false,
            'description'    => '详情权限',
            'group'          => 'store-navigation',
            'identification' => 'navigation',
            'module'         => 'mall-seller',
        ]);
        $this->manager->extend([
            'default'        => false,
            'description'    => '删除权限',
            'group'          => 'store-navigation',
            'identification' => 'remove',
            'module'         => 'mall-seller',
        ]);
    }

    protected function extendUserPermission()
    {

    }
}
