<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <heshudong@ibenchu.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-04-26 12:25
 */
namespace Notadd\Mall\Handlers\Administration\Product;

use Notadd\Foundation\Routing\Abstracts\Handler;
use Notadd\Mall\Models\Product;

/**
 * Class RemoveHandler.
 */
class RemoveHandler extends Handler
{
    /**
     * Execute Handler.
     *
     * @throws \Exception
     */
    public function execute()
    {
        $this->validate($this->request, [
            'id' => 'required',
        ], [
            'id.required' => '商品 ID 必须填写',
        ]);
        $product = Product::query()->find($this->request->input('id'));
        if ($product instanceof Product && $product->delete()) {
            $this->withCode(200)->withMessage('删除商品成功！');
        } else {
            $this->withCode(500)->withError('没有对应的商品信息！');
        }
    }
}
