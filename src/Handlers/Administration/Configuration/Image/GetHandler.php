<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <heshudong@ibenchu.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-05-03 12:24
 */
namespace Notadd\Mall\Handlers\Administration\Configuration\Image;

use Notadd\Foundation\Routing\Abstracts\Handler;

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
