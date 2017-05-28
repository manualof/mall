<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <heshudong@ibenchu.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-05-09 12:16
 */
namespace Notadd\Mall\Handlers\Admin\Shop\Dynamic;

use Notadd\Foundation\Passport\Abstracts\Handler;
use Notadd\Mall\Models\ShopDynamic;

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
        $builder = ShopDynamic::query();
        $this->withCode(200)->withData($builder->get())->withMessage('');
    }
}
