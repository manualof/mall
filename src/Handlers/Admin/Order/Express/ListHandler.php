<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <heshudong@ibenchu.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-05-08 16:49
 */
namespace Notadd\Mall\Handlers\Admin\Order\Express;

use Notadd\Foundation\Routing\Abstracts\Handler;
use Notadd\Mall\Models\OrderExpress;

/**
 * Class ListHandler.
 */
class ListHandler extends Handler
{
    /**
     * Execute Handler.
     *
     * @throws \Exception
     */
    protected function execute()
    {
        $builder = OrderExpress::query();
        $this->withCode(200)->withData($builder->get())->withMessage('');
    }
}
