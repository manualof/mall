<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <heshudong@ibenchu.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-04-26 12:17
 */
namespace Notadd\Mall\Handlers\Admin\Product;

use Notadd\Foundation\Passport\Abstracts\Handler;
use Notadd\Mall\Models\Product;

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
        $builder = Product::query();
        $this->withCode(200)->withData($builder->get())->withMessage('');
    }
}
