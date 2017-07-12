<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <269044570@qq.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-07-12 12:48
 */
namespace Notadd\Mall\Handlers\Administration\Product\Library;

use Notadd\Foundation\Routing\Abstracts\Handler;
use Notadd\Mall\Models\ProductLibrary;

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
    protected function execute()
    {
        $this->validate($this->request, [
            'id' => 'required',
        ], [
            'id.required' => '商品 ID 必须填写',
        ]);
        $product = ProductLibrary::query()->find($this->request->input('id'));
        if ($product instanceof ProductLibrary && $product->delete()) {
            $this->withCode(200)->withMessage('删除商品成功！');
        } else {
            $this->withCode(500)->withError('没有对应的商品信息！');
        }
    }
}
