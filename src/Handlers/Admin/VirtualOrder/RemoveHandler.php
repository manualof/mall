<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <heshudong@ibenchu.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-04-26 14:43
 */
namespace Notadd\Mall\Handlers\Admin\VirtualOrder;

use Notadd\Foundation\Routing\Abstracts\Handler;
use Notadd\Mall\Models\VirtualProductOrder;

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
        $order = VirtualProductOrder::query()->find($id);
        if ($order && $order->delete()) {
            $this->withCode(200)->withMessage('');
        } else {
            $this->withCode(500)->withError('');
        }
    }
}
