<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <heshudong@ibenchu.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-04-25 17:24
 */
namespace Notadd\Mall\Handlers\Admin\Order;

use Notadd\Foundation\Passport\Abstracts\Handler;
use Notadd\Mall\Models\Order;

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
        $builder = Order::query();
        $this->withCode(200)->withData($builder->get())->withMessage('');
    }
}
