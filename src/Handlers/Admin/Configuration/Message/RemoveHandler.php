<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <heshudong@ibenchu.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-05-03 15:43
 */
namespace Notadd\Mall\Handlers\Admin\Configuration\Message;

use Notadd\Foundation\Passport\Abstracts\Handler;
use Notadd\Mall\Models\Message;

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
        $message = Message::query()->find($id);
        if ($message && $message->delete()) {
            $this->withCode(200)->withMessage('');
        } else {
            $this->withCode(500)->withError('');
        }
    }
}
