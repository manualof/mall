<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <heshudong@ibenchu.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-04-26 14:54
 */
namespace Notadd\Mall\Handlers\Admin\Order;

use Notadd\Foundation\Routing\Abstracts\Handler;
use Notadd\Mall\Models\Order;

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
    public function execute()
    {
        $id = $this->request->input('id');
        $order = Order::onlyTrashed()->find($id);
        if ($order && $order->restore()) {
            $this->withCode(200)->withMessage('');
        } else {
            $this->withCode(500)->withError('');
        }
    }
}
