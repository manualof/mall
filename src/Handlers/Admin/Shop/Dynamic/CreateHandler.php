<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <heshudong@ibenchu.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-05-09 12:18
 */
namespace Notadd\Mall\Handlers\Admin\Shop\Dynamic;

use Notadd\Foundation\Routing\Abstracts\Handler;
use Notadd\Mall\Models\ShopDynamic;

/**
 * Class CreateHandler.
 */
class CreateHandler extends Handler
{
    /**
     * Execute Handler.
     *
     * @throws \Exception
     */
    public function execute()
    {
        if (ShopDynamic::query()->create($this->request->all())) {
            $this->withCode(200)->withMessage('');
        } else {
            $this->withCode(500)->withError('');
        }
    }
}
