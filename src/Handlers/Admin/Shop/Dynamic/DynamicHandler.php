<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <heshudong@ibenchu.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-05-09 12:20
 */
namespace Notadd\Mall\Handlers\Admin\Shop\Dynamic;

use Notadd\Foundation\Passport\Abstracts\Handler;

/**
 * Class DynamicHandler.
 */
class DynamicHandler extends Handler
{
    /**
     * Execute Handler.
     *
     * @throws \Exception
     */
    protected function execute()
    {
        $id = $this->request->input('id');
    }
}
