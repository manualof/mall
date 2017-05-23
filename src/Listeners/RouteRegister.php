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
use Notadd\Mall\Controllers\Api\Admin\ShopCategoryController;
use Notadd\Mall\Controllers\Api\Admin\ShopController;
use Notadd\Mall\Controllers\Api\Admin\ShopDynamicController;
use Notadd\Mall\Controllers\Api\Admin\ShopRateController;
use Notadd\Mall\Controllers\Api\Admin\ProductSpecificationController;
use Notadd\Mall\Controllers\Api\Admin\StatisticsAnalysisController;
use Notadd\Mall\Controllers\Api\Admin\StatisticsController;
use Notadd\Mall\Controllers\Api\Admin\StatisticsMemberController;
use Notadd\Mall\Controllers\Api\Admin\StatisticsStoreController;
use Notadd\Mall\Controllers\Api\Admin\UploadController;
use Notadd\Mall\Controllers\Api\Admin\VirtualOrderController;
use Notadd\Mall\Controllers\Api\Admin\VirtualProductController;
use Notadd\Mall\Controllers\Api\Seller\OrderController as SellerOrderController;
use Notadd\Mall\Controllers\Api\Seller\ServiceController;
use Notadd\Mall\Controllers\Api\Seller\ServiceRefundController;
use Notadd\Mall\Controllers\Api\Seller\StoreController;

/**
 * Class RouteRegister.
 */
class RouteRegister extends AbstractRouteRegister
{
    /**
     * Handle Route Registrar.
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
            $this->router->post('configuration/search/get', ConfigurationSearchController::class . '@set');
            $this->router->post('configuration/search/set', ConfigurationSearchController::class . '@set');
            $this->router->post('configuration/search/hot/create', ConfigurationSearchHotController::class . '@create');
            $this->router->post('configuration/search/hot/edit', ConfigurationSearchHotController::class . '@edit');
            $this->router->post('configuration/search/hot/list', ConfigurationSearchHotController::class . '@list');
            $this->router->post('configuration/search/hot/remove', ConfigurationSearchHotController::class . '@remove');
            $this->router->post('order/create', OrderController::class . '@create');
            $this->router->post('order/edit', OrderController::class . '@edit');
            $this->router->post('order/list', OrderController::class . '@list');
            $this->router->post('order/remove', OrderController::class . '@remove');
            $this->router->post('order/restore', OrderController::class . '@restore');
            $this->router->post('order/exchange/ask', OrderExchangeController::class . '@ask');
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
            $this->router->post('order/rate/create', OrderRateController::class . '@create');
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
            $this->router->post('product/create', ProductController::class . '@create');
            $this->router->post('product/edit', ProductController::class . '@edit');
            $this->router->post('product/list', ProductController::class . '@list');
            $this->router->post('product/remove', ProductController::class . '@remove');
            $this->router->post('product/restore', ProductController::class . '@restore');
            $this->router->post('product/category/create', ProductCategoryController::class . '@create');
            $this->router->post('product/category/edit', ProductCategoryController::class . '@edit');
            $this->router->post('product/category/list', ProductCategoryController::class . '@list');
            $this->router->post('product/category/remove', ProductCategoryController::class . '@remove');
            $this->router->post('product/category/restore', ProductCategoryController::class . '@restore');
            $this->router->post('shop/create', ShopController::class . '@create');
            $this->router->post('shop/edit', ShopController::class . '@edit');
            $this->router->post('shop/list', ShopController::class . '@list');
            $this->router->post('shop/remove', ShopController::class . '@remove');
            $this->router->post('shop/restore', ShopController::class . '@restore');
            $this->router->post('shop/category', ShopCategoryController::class . '@category');
            $this->router->post('shop/category/create', ShopCategoryController::class . '@create');
            $this->router->post('shop/category/edit', ShopCategoryController::class . '@edit');
            $this->router->post('shop/category/list', ShopCategoryController::class . '@list');
            $this->router->post('shop/category/remove', ShopCategoryController::class . '@remove');
            $this->router->post('shop/category/restore', ShopCategoryController::class . '@restore');
            $this->router->post('shop/dynamic', ShopDynamicController::class . '@dynamic');
            $this->router->post('shop/dynamic/create', ShopDynamicController::class . '@create');
            $this->router->post('shop/dynamic/edit', ShopDynamicController::class . '@edit');
            $this->router->post('shop/dynamic/list', ShopDynamicController::class . '@dynamic');
            $this->router->post('shop/dynamic/remove', ShopDynamicController::class . '@remove');
            $this->router->post('shop/rate', ShopRateController::class . '@rate');
            $this->router->post('shop/rate/create', ShopRateController::class . '@create');
            $this->router->post('shop/rate/edit', ShopRateController::class . '@edit');
            $this->router->post('shop/rate/list', ShopRateController::class . '@list');
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
        });
    }
}
