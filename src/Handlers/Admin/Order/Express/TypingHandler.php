<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <heshudong@ibenchu.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-05-08 16:51
 */
namespace Notadd\Mall\Handlers\Admin\Order\Express;

use Notadd\Foundation\Passport\Abstracts\Handler;
use Notadd\Mall\Models\OrderExpress;

/**
 * Class TypingHandler.
 */
class TypingHandler extends Handler
{
    /**
     * Execute Handler.
     *
     * @throws \Exception
     */
    public function execute()
    {
        $id = $this->request->input('id');
        $exchange = OrderExpress::query()->find($id);
        if ($exchange) {
            $this->withCode(200)->withMessage('');
        } else {
            $this->withCode(500)->withError('');
        }
    }
}
