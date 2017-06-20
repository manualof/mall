<?php
/**
 * This file is part of Notadd.
 *
 * @author        TwilRoad <heshudong@ibenchu.com>
 * @copyright (c) 2017, notadd.com
 * @datetime      2017-05-23 19:47
 */
namespace Notadd\Mall\Handlers\Seller\Product;

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
    public function execute()
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
        $this->database->beginTransaction();
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
            $this->database->commit();
            $this->withCode(200)->withMessage('添加产品成功！');
        } else {
            $this->database->rollBack();
            $this->withCode(500)->withError('添加产品失败！');
        }
    }
}
