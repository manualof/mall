<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <heshudong@ibenchu.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-04-26 14:37
 */
namespace Notadd\Mall\Handlers\Admin\VirtualProduct;

use Notadd\Foundation\Passport\Abstracts\Handler;
use Notadd\Mall\Models\VirtualProduct;

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
        $id = $this->request->input('id');
        $product = VirtualProduct::query()->find($id);
        if ($product && $product->delete()) {
            $this->withCode(200)->withMessage('');
        } else {
            $this->withCode(500)->withError('');
        }
    }
}
