<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <heshudong@ibenchu.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-05-03 14:42
 */
namespace Notadd\Mall\Handlers\Admin\Configuration\Image\DefaultImage;

use Notadd\Foundation\Routing\Abstracts\Handler;

/**
 * Class WatchHandler.
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
