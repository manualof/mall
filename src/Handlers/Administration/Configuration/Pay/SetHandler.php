<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <heshudong@ibenchu.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-05-03 16:09
 */
namespace Notadd\Mall\Handlers\Administration\Configuration\Pay;

use Notadd\Foundation\Routing\Abstracts\Handler;

/**
 * Class SetHandler.
 */
class SetHandler extends Handler
{
    /**
     * Execute Handler.
     *
     * @throws \Exception
     */
    public function execute()
    {
        $this->withCode(200)->withMessage('');
    }
}
