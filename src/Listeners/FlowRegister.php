<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <269044570@qq.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-05-31 20:44
 */
namespace Notadd\Mall\Listeners;

use Notadd\Foundation\Flow\Abstracts\FlowRegister as AbstractFlowRegister;
use Notadd\Mall\Entities\Express;
use Notadd\Mall\Entities\Order;
use Notadd\Mall\Entities\OrderExchange;
use Notadd\Mall\Entities\OrderExpress;
use Notadd\Mall\Entities\OrderRate;
use Notadd\Mall\Entities\OrderRefund;
use Notadd\Mall\Entities\Pay;
use Notadd\Mall\Entities\Product;
use Notadd\Mall\Entities\ProductCategory;
use Notadd\Mall\Entities\ProductRate;
use Notadd\Mall\Entities\ProductSpecification;
use Notadd\Mall\Entities\Store;
use Notadd\Mall\Entities\StoreCategory;
use Notadd\Mall\Entities\StoreDynamic;
use Notadd\Mall\Entities\StoreRate;

/**
 * Class FlowRegister.
 */
class FlowRegister extends AbstractFlowRegister
{
    /**
     * Register flow or flows.
     */
    public function handle()
    {
        $this->flow->register(Express::class);
        $this->flow->register(Order::class);
        $this->flow->register(OrderExchange::class);
        $this->flow->register(OrderExpress::class);
        $this->flow->register(OrderRate::class);
        $this->flow->register(OrderRefund::class);
        $this->flow->register(Pay::class);
        $this->flow->register(Product::class);
        $this->flow->register(ProductCategory::class);
        $this->flow->register(ProductRate::class);
        $this->flow->register(ProductSpecification::class);
        $this->flow->register(Store::class);
        $this->flow->register(StoreCategory::class);
        $this->flow->register(StoreDynamic::class);
        $this->flow->register(StoreRate::class);
    }
}
