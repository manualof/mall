<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <heshudong@ibenchu.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-05-03 12:03
 */
namespace Notadd\Mall\Handlers\Admin\Configuration\Advertisement;

use Notadd\Foundation\Passport\Abstracts\Handler;
use Notadd\Mall\Models\Advertisement;

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
        $id = $this->request->input('');
        $advertisement = Advertisement::query()->find($id);
        if ($advertisement) {
            $advertisement->delete();
            $this->success()->withMessage('');
        } else {
            $this->withCode(500)->withError('');
        }
    }
}
