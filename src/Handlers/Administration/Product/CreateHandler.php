<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <269044570@qq.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-06-21 20:20
 */
namespace Notadd\Mall\Handlers\Administration\Product;

use Notadd\Foundation\Routing\Abstracts\Handler;
use Notadd\Mall\Models\Product;

/**
 * Class CreateHandler.
 */
class CreateHandler extends Handler
{
    /**
     * Execute Handler.
     *
     * @throws \Exception
     */
    protected function execute()
    {
        $this->validate($this->request, [
            'barcode'           => 'numeric',
            'brand_id'          => 'numeric',
            'business_item'     => 'numeric',
            'category_id'       => 'numeric',
            'description'       => 'required',
            'name'              => 'required',
            'price'             => 'required|numeric',
            'price_cost'        => 'required|numeric',
            'price_market'      => 'numeric',
            'inventory'         => 'required|numeric',
            'inventory_warning' => 'numeric',
        ], [
            'barcode.numeric'           => '商品条形码必须为数值',
            'brand_id.numeric'          => '品牌 ID 必须为数值',
            'business_item.numeric'     => '商家货号必须为数值',
            'category_id.numeric'       => '分类 ID 必须为数值',
            'name.required'             => '商品名称必须填写',
            'price.numeric'             => '价格必须为数值',
            'price.required'            => '价格必须填写',
            'price_cost.numeric'        => '成本价格必须为数值',
            'price_cost.required'       => '成本价格必须填写',
            'price_market.numeric'      => '市场价格必须为数值',
            'inventory.numeric'         => '库存必须为数值',
            'inventory_warning.numeric' => '库存预警值必须为数值',
        ]);
        $this->beginTransaction();
        $data = $this->request->only([
            'barcode',
            'brand_id',
            'business_item',
            'category_id',
            'description',
            'name',
            'price',
            'price_cost',
            'price_market',
            'inventory',
            'inventory_warning',
        ]);
        if (Product::query()->create($data)) {
            $this->commitTransaction();
            $this->withCode(200)->withMessage('添加产品成功！');
        } else {
            $this->rollBackTransaction();
            $this->withCode(500)->withError('添加产品失败！');
        }
    }
}
