<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <heshudong@ibenchu.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-04-26 14:32
 */
namespace Notadd\Mall\Handlers\Admin\VirtualProduct;

use Notadd\Foundation\Routing\Abstracts\Handler;
use Notadd\Mall\Models\VirtualProduct;

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
        $builder = VirtualProduct::query();
        $this->withCode(200)->withData($builder->get())->withMessage('');
    }
}
