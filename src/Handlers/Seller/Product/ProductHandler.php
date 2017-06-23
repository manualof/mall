<?php
/**
 * This file is part of Notadd.
 *
 * @author        TwilRoad <heshudong@ibenchu.com>
 * @copyright (c) 2017, notadd.com
 * @datetime      2017-05-23 19:56
 */
namespace Notadd\Mall\Handlers\Seller\Product;

use Notadd\Foundation\Routing\Abstracts\Handler;
use Notadd\Mall\Models\Product;

/**
 * Class ProductHandler.
 */
class ProductHandler extends Handler
{
    /**
     * Execute Handler.
     *
     * @throws \Exception
     */
    protected function execute()
    {
        $this->validate($this->request, [
            'id' => 'required',
        ], [
            'id.required' => '产品 ID 必须填写',
        ]);
        $product = Product::query()->find($this->request->input('id'));
        if ($product instanceof Product) {
            $this->withCode(200)->withData($product)->withMessage('获取产品信息成功！');
        } else {
            $this->withCode(500)->withError('获取产品信息失败！');
        }
    }
}
