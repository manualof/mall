<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <269044570@qq.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-06-23 14:08
 */
namespace Notadd\Mall\Handlers\Seller\Product;

use Notadd\Foundation\Routing\Abstracts\Handler;
use Notadd\Mall\Models\Product;

/**
 * Class RestoreHandler.
 */
class RestoreHandler extends Handler
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
        $product = Product::query()->onlyTrashed()->find($this->request->input('id'));
        if ($product instanceof Product && $product->restore()) {
            $this->withCode(200)->withMessage('恢复产品成功！');
        } else {
            $this->withCode(500)->withError('恢复产品失败！');
        }
    }
}
