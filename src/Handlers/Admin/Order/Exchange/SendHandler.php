<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <heshudong@ibenchu.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-05-08 17:34
 */
namespace Notadd\Mall\Handlers\Admin\Order\Exchange;

use Notadd\Foundation\Routing\Abstracts\Handler;
use Notadd\Mall\Models\OrderExchange;

/**
 * Class SendHandler.
 */
class SendHandler extends Handler
{
    /**
     * Execute Handler.
     *
     * @throws \Exception
     */
    public function execute()
    {
        $id = $this->request->input('id');
        $exchange = OrderExchange::query()->find($id);
        if ($exchange) {
            $this->withCode(200)->withMessage('');
        } else {
            $this->withCode(500)->withError('');
        }
    }
}
