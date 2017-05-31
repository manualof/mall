<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <heshudong@ibenchu.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-05-08 15:27
 */
namespace Notadd\Mall\Handlers\Admin\Order\Refund;

use Notadd\Foundation\Routing\Abstracts\Handler;
use Notadd\Mall\Models\OrderRefund;

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
        $refund = OrderRefund::query()->find($id);
        if ($refund) {
            $this->withCode(200)->withMessage('');
        } else {
            $this->withCode(500)->withError('');
        }
    }
}
