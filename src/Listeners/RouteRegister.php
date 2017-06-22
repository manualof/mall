<?php
/**
 * This file is part of Notadd.
 *
 * @author Qiyueshiyi <qiyueshiyi@outlook.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-03-22 16:50
 */
namespace Notadd\Mall\Listeners;

use Notadd\Foundation\Routing\Abstracts\RouteRegister as AbstractRouteRegister;
use Notadd\Mall\Controllers\Api\Admin\AddressController;
use Notadd\Mall\Controllers\Api\Admin\ProductBrandController;
use Notadd\Mall\Controllers\Api\Admin\ProductCategoryController;
use Notadd\Mall\Controllers\Api\Admin\ConfigurationAdvertisementController;
use Notadd\Mall\Controllers\Api\Admin\ConfigurationAdvertisementPositionController;
use Notadd\Mall\Controllers\Api\Admin\ConfigurationController;
use Notadd\Mall\Controllers\Api\Admin\ConfigurationExpressController;
use Notadd\Mall\Controllers\Api\Admin\ConfigurationImageController;
use Notadd\Mall\Controllers\Api\Admin\ConfigurationImageDefaultController;
use Notadd\Mall\Controllers\Api\Admin\ConfigurationMessageController;
use Notadd\Mall\Controllers\Api\Admin\ConfigurationPayController;
use Notadd\Mall\Controllers\Api\Admin\ConfigurationSearchController;
use Notadd\Mall\Controllers\Api\Admin\ConfigurationSearchHotController;
use Notadd\Mall\Controllers\Api\Admin\OrderController;
use Notadd\Mall\Controllers\Api\Admin\OrderExchangeController;
use Notadd\Mall\Controllers\Api\Admin\OrderExpressController;
use Notadd\Mall\Controllers\Api\Admin\OrderInvoiceController;
use Notadd\Mall\Controllers\Api\Admin\OrderProcessController;
use Notadd\Mall\Controllers\Api\Admin\OrderRateController;
use Notadd\Mall\Controllers\Api\Admin\OrderRefundController;
use Notadd\Mall\Controllers\Api\Admin\ProductController;
use Notadd\Mall\Controllers\Api\Admin\StoreCategoryController as AdminStoreCategoryController;
use Notadd\Mall\Controllers\Api\Admin\StoreController as AdminStoreController;
use Notadd\Mall\Controllers\Api\Admin\StoreDynamicController as AdminStoreDynamicController;
use Notadd\Mall\Controllers\Api\Admin\StoreRateController;
use Notadd\Mall\Controllers\Api\Admin\ProductSpecificationController;
use Notadd\Mall\Controllers\Api\Admin\StatisticsAnalysisController;
use Notadd\Mall\Controllers\Api\Admin\StatisticsController;
use Notadd\Mall\Controllers\Api\Admin\StatisticsMemberController;
use Notadd\Mall\Controllers\Api\Admin\StatisticsStoreController;
use Notadd\Mall\Controllers\Api\Admin\UploadController;
use Notadd\Mall\Controllers\Api\Admin\VirtualOrderController;
use Notadd\Mall\Controllers\Api\Admin\VirtualProductController;
use Notadd\Mall\Controllers\Api\Seller\OrderController as SellerOrderController;
use Notadd\Mall\Controllers\Api\Seller\ProductController as SellerProductController;
use Notadd\Mall\Controllers\Api\Seller\ProductSpecificationController as SellerProductSpecificationController;
use Notadd\Mall\Controllers\Api\Seller\ProductSubscribeController;
use Notadd\Mall\Controllers\Api\Seller\ServiceController;
use Notadd\Mall\Controllers\Api\Seller\ServiceRefundController;
use Notadd\Mall\Controllers\Api\Seller\StoreBrandController;
use Notadd\Mall\Controllers\Api\Seller\StoreCategoryController;
use Notadd\Mall\Controllers\Api\Seller\StoreConfigurationController;
use Notadd\Mall\Controllers\Api\Seller\StoreController;
use Notadd\Mall\Controllers\Api\Seller\StoreDynamicController;
use Notadd\Mall\Controllers\Api\Seller\StoreNavigationController;
use Notadd\Mall\Controllers\Api\Store\CategoryController;
use Notadd\Mall\Controllers\Api\Store\ProductController as StoreProductController;
use Notadd\Mall\Controllers\Api\Store\ProductRateController;
use Notadd\Mall\Controllers\Api\Store\StoreController as StoreStoreController;
use Notadd\Mall\Controllers\Api\User\CardController;
use Notadd\Mall\Controllers\Api\User\CouponController;
use Notadd\Mall\Controllers\Api\User\OrderController as UserOrderController;
use Notadd\Mall\Controllers\Api\User\RateController;
use Notadd\Mall\Controllers\Api\User\UserController;
use Notadd\Mall\Controllers\Api\User\FollowController;
use Notadd\Mall\Controllers\Api\User\VipController;
use Notadd\Mall\Controllers\MallController;
use Notadd\Mall\Controllers\StoreController as ForegroundStoreController;
use Notadd\Mall\Controllers\UserController as ForegroundUserController;

/**
 * Class RouteRegister.
 */
class RouteRegister extends AbstractRouteRegister
{
    /**
     * Handle Route Register.
     */
    public function handle()
    {
        $this->router->group(['middleware' => ['auth:api', 'cross', 'web'], 'prefix' => 'api/mall/admin'], function () {
            $this->router->post('address', AddressController::class . '@address');
            $this->router->post('address/edit', AddressController::class . '@edit');
            $this->router->post('address/list', AddressController::class . '@list');
            $this->router->post('configuration/get', ConfigurationController::class . '@get');
            $this->router->post('configuration/set', ConfigurationController::class . '@set');
            $this->router->post('configuration/advertisement/create', ConfigurationAdvertisementController::class . '@create');
            $this->router->post('configuration/advertisement/edit', ConfigurationAdvertisementController::class . '@edit');
            $this->router->post('configuration/advertisement/list', ConfigurationAdvertisementController::class . '@list');
            $this->router->post('configuration/advertisement/remove', ConfigurationAdvertisementController::class . '@remove');
            $this->router->post('configuration/advertisement/position/create', ConfigurationAdvertisementPositionController::class . '@create');
            $this->router->post('configuration/advertisement/position/edit', ConfigurationAdvertisementPositionController::class . '@edit');
            $this->router->post('configuration/advertisement/position/list', ConfigurationAdvertisementPositionController::class . '@list');
            $this->router->post('configuration/advertisement/position/remove', ConfigurationAdvertisementPositionController::class . '@remove');
            $this->router->post('configuration/express/get', ConfigurationExpressController::class . '@get');
            $this->router->post('configuration/express/set', ConfigurationExpressController::class . '@set');
            $this->router->post('configuration/image/get', ConfigurationImageController::class . '@get');
            $this->router->post('configuration/image/set', ConfigurationImageController::class . '@set');
            $this->router->post('configuration/image/default/get', ConfigurationImageDefaultController::class . '@get');
            $this->router->post('configuration/image/default/set', ConfigurationImageDefaultController::class . '@set');
            $this->router->post('configuration/message/create', ConfigurationMessageController::class . '@create');
            $this->router->post('configuration/message/edit', ConfigurationMessageController::class . '@edit');
            $this->router->post('configuration/message/list', ConfigurationMessageController::class . '@list');
            $this->router->post('configuration/message/remove', ConfigurationMessageController::class . '@remove');
            $this->router->post('configuration/pay/get', ConfigurationPayController::class . '@get');
            $this->router->post('configuration/pay/set', ConfigurationPayController::class . '@set');
            $this->router->post('configuration/search/get', ConfigurationSearchController::class . '@get');
            $this->router->post('configuration/search/set', ConfigurationSearchController::class . '@set');
            $this->router->post('configuration/search/hot/create', ConfigurationSearchHotController::class . '@create');
            $this->router->post('configuration/search/hot/edit', ConfigurationSearchHotController::class . '@edit');
            $this->router->post('configuration/search/hot/list', ConfigurationSearchHotController::class . '@list');
            $this->router->post('configuration/search/hot/remove', ConfigurationSearchHotController::class . '@remove');
            $this->router->post('order', OrderController::class . '@order');
            $this->router->post('order/edit', OrderController::class . '@edit');
            $this->router->post('order/list', OrderController::class . '@list');
            $this->router->post('order/remove', OrderController::class . '@remove');
            $this->router->post('order/restore', OrderController::class . '@restore');
            $this->router->post('order/exchange/confirm', OrderExchangeController::class . '@confirm');
            $this->router->post('order/exchange/finish', OrderExchangeController::class . '@finish');
            $this->router->post('order/exchange/list', OrderExchangeController::class . '@list');
            $this->router->post('order/exchange/send', OrderExchangeController::class . '@send');
            $this->router->post('order/express/list', OrderExpressController::class . '@list');
            $this->router->post('order/express/trace', OrderExpressController::class . '@trace');
            $this->router->post('order/express/typing', OrderExpressController::class . '@typing');
            $this->router->post('order/rate', OrderRateController::class . '@rate');
            $this->router->post('order/invoice', OrderInvoiceController::class . '@invoice');
            $this->router->post('order/invoice/create', OrderInvoiceController::class . '@create');
            $this->router->post('order/invoice/edit', OrderInvoiceController::class . '@edit');
            $this->router->post('order/invoice/list', OrderInvoiceController::class . '@list');
            $this->router->post('order/invoice/remove', OrderInvoiceController::class . '@remove');
            $this->router->post('order/rate', OrderRateController::class . '@rate');
            $this->router->post('order/rate/edit', OrderRateController::class . '@edit');
            $this->router->post('order/rate/list', OrderRateController::class . '@list');
            $this->router->post('order/refund/ask', OrderRefundController::class . '@ask');
            $this->router->post('order/refund/confirm', OrderRefundController::class . '@confirm');
            $this->router->post('order/refund/finish', OrderRefundController::class . '@finish');
            $this->router->post('order/refund/list', OrderRefundController::class . '@list');
            $this->router->post('order/refund/send', OrderRefundController::class . '@send');
            $this->router->post('order/process/confirm', OrderProcessController::class . '@confirm');
            $this->router->post('order/process/create', OrderProcessController::class . '@create');
            $this->router->post('order/process/finish', OrderProcessController::class . '@finish');
            $this->router->post('order/process/pay', OrderProcessController::class . '@pay');
            $this->router->post('order/process/send', OrderProcessController::class . '@send');
            $this->router->post('product', ProductController::class . '@product');
            $this->router->post('product/create', ProductController::class . '@create');
            $this->router->post('product/edit', ProductController::class . '@edit');
            $this->router->post('product/list', ProductController::class . '@list');
            $this->router->post('product/remove', ProductController::class . '@remove');
            $this->router->post('product/restore', ProductController::class . '@restore');
            $this->router->post('product/brand', ProductBrandController::class . '@brand');
            $this->router->post('product/brand/access', ProductBrandController::class . '@access');
            $this->router->post('product/brand/create', ProductBrandController::class . '@create');
            $this->router->post('product/brand/edit', ProductBrandController::class . '@edit');
            $this->router->post('product/brand/remove', ProductBrandController::class . '@remove');
            $this->router->post('product/category', ProductCategoryController::class . '@category');
            $this->router->post('product/category/create', ProductCategoryController::class . '@create');
            $this->router->post('product/category/edit', ProductCategoryController::class . '@edit');
            $this->router->post('product/category/list', ProductCategoryController::class . '@list');
            $this->router->post('product/category/remove', ProductCategoryController::class . '@remove');
            $this->router->post('product/category/restore', ProductCategoryController::class . '@restore');
            $this->router->post('store/create', AdminStoreController::class . '@create');
            $this->router->post('store/edit', AdminStoreController::class . '@edit');
            $this->router->post('store/list', AdminStoreController::class . '@list');
            $this->router->post('store/remove', AdminStoreController::class . '@remove');
            $this->router->post('store/restore', AdminStoreController::class . '@restore');
            $this->router->post('store/category', AdminStoreCategoryController::class . '@category');
            $this->router->post('store/category/create', AdminStoreCategoryController::class . '@create');
            $this->router->post('store/category/edit', AdminStoreCategoryController::class . '@edit');
            $this->router->post('store/category/list', AdminStoreCategoryController::class . '@list');
            $this->router->post('store/category/remove', AdminStoreCategoryController::class . '@remove');
            $this->router->post('store/category/restore', AdminStoreCategoryController::class . '@restore');
            $this->router->post('store/dynamic', AdminStoreDynamicController::class . '@dynamic');
            $this->router->post('store/dynamic/create', AdminStoreDynamicController::class . '@create');
            $this->router->post('store/dynamic/edit', AdminStoreDynamicController::class . '@edit');
            $this->router->post('store/dynamic/list', AdminStoreDynamicController::class . '@dynamic');
            $this->router->post('store/dynamic/remove', AdminStoreDynamicController::class . '@remove');
            $this->router->post('store/rate', StoreRateController::class . '@rate');
            $this->router->post('store/rate/create', StoreRateController::class . '@create');
            $this->router->post('store/rate/edit', StoreRateController::class . '@edit');
            $this->router->post('store/rate/list', StoreRateController::class . '@list');
            $this->router->post('specification', ProductSpecificationController::class . '@specification');
            $this->router->post('specification/create', ProductSpecificationController::class . '@create');
            $this->router->post('specification/edit', ProductSpecificationController::class . '@edit');
            $this->router->post('specification/list', ProductSpecificationController::class . '@list');
            $this->router->post('specification/remove', ProductSpecificationController::class . '@remove');
            $this->router->post('statistics', StatisticsController::class . '@get');
            $this->router->post('statistics/analysis', StatisticsAnalysisController::class . '@dashboard');
            $this->router->post('statistics/analysis', StatisticsAnalysisController::class . '@dashboard');
            $this->router->post('statistics/analysis/industry', StatisticsAnalysisController::class . '@industry');
            $this->router->post('statistics/analysis/price', StatisticsAnalysisController::class . '@price');
            $this->router->post('statistics/member', StatisticsMemberController::class . '@member');
            $this->router->post('statistics/member/area', StatisticsMemberController::class . '@area');
            $this->router->post('statistics/member/newly', StatisticsMemberController::class . '@newly');
            $this->router->post('statistics/sales', StatisticsStoreController::class . '@income');
            $this->router->post('statistics/sales/order', StatisticsStoreController::class . '@order');
            $this->router->post('statistics/store/area', StatisticsStoreController::class . '@area');
            $this->router->post('statistics/store/hots', StatisticsStoreController::class . '@hots');
            $this->router->post('statistics/store/newly', StatisticsStoreController::class . '@newly');
            $this->router->post('statistics/store/sales', StatisticsStoreController::class . '@sales');
            $this->router->post('upload', UploadController::class . '@handle');
            $this->router->post('virtual-order/create', VirtualOrderController::class . '@create');
            $this->router->post('virtual-order/edit', VirtualOrderController::class . '@edit');
            $this->router->post('virtual-order/list', VirtualOrderController::class . '@list');
            $this->router->post('virtual-order/remove', VirtualOrderController::class . '@remove');
            $this->router->post('virtual-order/restore', VirtualOrderController::class . '@restore');
            $this->router->post('virtual-product/create', VirtualProductController::class . '@create');
            $this->router->post('virtual-product/edit', VirtualProductController::class . '@edit');
            $this->router->post('virtual-product/list', VirtualProductController::class . '@list');
            $this->router->post('virtual-product/remove', VirtualProductController::class . '@remove');
            $this->router->post('virtual-product/restore', VirtualProductController::class . '@restore');
        });

        $this->router->group(['middleware' => ['auth:api', 'cross', 'web'], 'prefix' => 'api/mall/seller'], function () {
            $this->router->post('order', SellerOrderController::class . '@order');
            $this->router->post('order/list', SellerOrderController::class . '@list');
            $this->router->post('order/process', SellerOrderController::class . '@process');
            $this->router->post('service', ServiceController::class . '@list');
            $this->router->post('service/remove', ServiceController::class . '@remove');
            $this->router->post('service/refund', ServiceRefundController::class . '@refund');
            $this->router->post('service/refund/list', ServiceRefundController::class . '@list');
            $this->router->post('service/refund/process', ServiceRefundController::class . '@process');
            $this->router->post('store', StoreController::class . '@store');
            $this->router->post('store/renew', StoreController::class . '@renew');
            $this->router->post('store/brand', StoreBrandController::class . '@brand');
            $this->router->post('store/brand/apply', StoreBrandController::class . '@apply');
            $this->router->post('store/brand/edit', StoreBrandController::class . '@edit');
            $this->router->post('store/brand/list', StoreBrandController::class . '@list');
            $this->router->post('store/brand/revoke', StoreBrandController::class . '@revoke');
            $this->router->post('store/category', StoreCategoryController::class . '@category');
            $this->router->post('store/category/create', StoreCategoryController::class . '@create');
            $this->router->post('store/category/edit', StoreCategoryController::class . '@edit');
            $this->router->post('store/category/list', StoreCategoryController::class . '@list');
            $this->router->post('store/category/remove', StoreCategoryController::class . '@remove');
            $this->router->post('store/configuration', StoreConfigurationController::class . '@configuration');
            $this->router->post('store/configuration/carousel', StoreConfigurationController::class . '@carousel');
            $this->router->post('store/configuration/setting', StoreConfigurationController::class . '@settings');
            $this->router->post('store/dynamic', StoreDynamicController::class . '@dynamic');
            $this->router->post('store/dynamic/configuration', StoreDynamicController::class . '@configuration');
            $this->router->post('store/dynamic/create', StoreDynamicController::class . '@create');
            $this->router->post('store/dynamic/edit', StoreDynamicController::class . '@edit');
            $this->router->post('store/dynamic/list', StoreDynamicController::class . '@list');
            $this->router->post('store/dynamic/remove', StoreDynamicController::class . '@remove');
            $this->router->post('store/navigation', StoreNavigationController::class . '@navigation');
            $this->router->post('store/navigation/create', StoreNavigationController::class . '@create');
            $this->router->post('store/navigation/edit', StoreNavigationController::class . '@edit');
            $this->router->post('store/navigation/list', StoreNavigationController::class . '@list');
            $this->router->post('store/navigation/remove', StoreNavigationController::class . '@remove');
            $this->router->post('store/product', SellerProductController::class . '@product');
            $this->router->post('store/product/create', SellerProductController::class . '@create');
            $this->router->post('store/product/edit', SellerProductController::class . '@edit');
            $this->router->post('store/product/list', SellerProductController::class . '@list');
            $this->router->post('store/product/remove', SellerProductController::class . '@remove');
            $this->router->post('store/product/subscribe/list', ProductSubscribeController::class . '@list');
            $this->router->post('store/product/subscribe/remove', ProductSubscribeController::class . '@remove');
            $this->router->post('store/product/specifications', SellerProductSpecificationController::class . '@specifications');
            $this->router->post('store/product/specifications/create', SellerProductSpecificationController::class . '@create');
            $this->router->post('store/product/specifications/edit', SellerProductSpecificationController::class . '@edit');
            $this->router->post('store/product/specifications/list', SellerProductSpecificationController::class . '@list');
            $this->router->post('store/product/specifications/remove', SellerProductSpecificationController::class . '@remove');
        });

        $this->router->group(['middleware' => ['auth:api', 'cross', 'web'], 'prefix' => 'api/mall/store'], function () {
            $this->router->post('/', StoreStoreController::class . '@store');
            $this->router->post('list', StoreStoreController::class . '@list');
            $this->router->post('category', CategoryController::class . '@category');
            $this->router->post('category/list', CategoryController::class . '@list');
            $this->router->post('product', StoreProductController::class . '@product');
            $this->router->post('product/rate', ProductRateController::class . '@rate');
            $this->router->post('product/rate/create', ProductRateController::class . '@create');
            $this->router->post('product/rate/list', ProductRateController::class . '@list');
            $this->router->post('product/rate/remove', ProductRateController::class . '@remove');
        });

        $this->router->group(['middleware' => ['auth:api', 'cross', 'web'], 'prefix' => 'api/mall/user'], function () {
            $this->router->post('/', UserController::class . '@user');
            $this->router->post('card', CardController::class . '@card');
            $this->router->post('card/add', CardController::class . '@add');
            $this->router->post('card/empty', CardController::class . '@empty');
            $this->router->post('card/remove', CardController::class . '@remove');
            $this->router->post('coupon', CouponController::class . '@coupon');
            $this->router->post('coupon/list', CouponController::class . '@list');
            $this->router->post('coupon/remove', CouponController::class . '@remove');
            $this->router->post('follow/create', FollowController::class . '@create');
            $this->router->post('follow/edit', FollowController::class . '@edit');
            $this->router->post('follow/list', FollowController::class . '@list');
            $this->router->post('follow/remove', FollowController::class . '@remove');
            $this->router->post('footprint/list', UserOrderController::class . '@list');
            $this->router->post('footprint/remove', UserOrderController::class . '@remove');
            $this->router->post('order', UserOrderController::class . '@order');
            $this->router->post('order/cancel', UserOrderController::class . '@cancel');
            $this->router->post('order/edit', UserOrderController::class . '@edit');
            $this->router->post('order/list', UserOrderController::class . '@list');
            $this->router->post('order/remove', UserOrderController::class . '@remove');
            $this->router->post('rate/edit', RateController::class . '@edit');
            $this->router->post('rate/list', RateController::class . '@list');
            $this->router->post('rate/remove', RateController::class . '@remove');
            $this->router->post('vip', VipController::class . '@vip');
        });

        $this->router->group(['middleware' => ['web'], 'prefix' => 'mall'], function () {
            $this->router->get('mall*', MallController::class . '@handle');
            $this->router->get('store*', ForegroundStoreController::class . '@handle');
            $this->router->get('user*', ForegroundUserController::class . '@handle');
        });
    }
}
