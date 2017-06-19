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
use Notadd\Mall\Flows\Express;
use Notadd\Mall\Flows\Pay;
use Notadd\Mall\Models\Order;
use Notadd\Mall\Models\OrderExchange;
use Notadd\Mall\Models\OrderExpress;
use Notadd\Mall\Models\OrderRate;
use Notadd\Mall\Models\OrderRefund;
use Notadd\Mall\Models\Product;
use Notadd\Mall\Models\ProductCategory;
use Notadd\Mall\Models\ProductSpecification;

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
        $this->flow->register(ProductSpecification::class);
//        $this->flow->register(Store::class);
//        $this->flow->register(StoreCategory::class);
//        $this->flow->register(StoreDynamic::class);
//        $this->flow->register(StoreRate::class);
    }
}
