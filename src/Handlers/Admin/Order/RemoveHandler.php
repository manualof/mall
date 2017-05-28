<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <heshudong@ibenchu.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-04-26 12:15
 */
namespace Notadd\Mall\Handlers\Admin\Order;

use Notadd\Foundation\Passport\Abstracts\Handler;
use Notadd\Mall\Models\Order;

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
        $order = Order::query()->find($id);
        if ($order && $order->delete()) {
            $this->withCode(200)->withMessage('');
        } else {
            $this->withCode(500)->withError('');
        }
    }
}
