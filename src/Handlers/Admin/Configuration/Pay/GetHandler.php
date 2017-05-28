<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <heshudong@ibenchu.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-05-03 16:06
 */
namespace Notadd\Mall\Handlers\Admin\Configuration\Pay;

use Notadd\Foundation\Passport\Abstracts\Handler;

/**
 * Class GetHandler.
 */
class GetHandler extends Handler
{
    /**
     * Execute Handler.
     *
     * @throws \Exception
     */
    protected function execute()
    {
        $this->withCode(200)->withData([])->withMessage('');
    }
}
