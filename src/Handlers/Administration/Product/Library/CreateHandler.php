<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <269044570@qq.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-07-12 12:11
 */
namespace Notadd\Mall\Handlers\Administration\Product\Library;

use Notadd\Foundation\Routing\Abstracts\Handler;
use Notadd\Foundation\Validation\Rule;
use Notadd\Mall\Models\ProductLibrary;

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
            'barcode'           => Rule::numeric(),
            'brand_id'          => [
                Rule::exists('mall_product_brands'),
                Rule::numeric(),
            ],
            'category_id'       => [
                Rule::exists('mall_product_categories'),
                Rule::numeric(),
            ],
            'description'       => Rule::required(),
            'name'              => Rule::required(),
        ], [
            'barcode.numeric'           => '商品条形码必须为数值',
            'brand_id.exists'           => '没有对应的品牌信息',
            'brand_id.numeric'          => '品牌 ID 必须为数值',
            'category_id.numeric'       => '分类 ID 必须为数值',
            'name.required'             => '商品名称必须填写',
            'description.required'      => '商品描述必须填写',
        ]);
        $this->beginTransaction();
        $data = $this->request->only([
            'barcode',
            'brand_id',
            'category_id',
            'delivery_area',
            'description',
            'description_mobile',
            'image',
            'inventory',
            'inventory_warning',
            'name',
            'price_range',
            'production_place',
            'public_praise',
            'selling_point',
            'size',
            'weight',
        ]);
        if (ProductLibrary::query()->create($data)) {
            $this->commitTransaction();
            $this->withCode(200)->withMessage('添加商品成功！');
        } else {
            $this->rollBackTransaction();
            $this->withCode(500)->withError('添加商品失败！');
        }
    }
}
