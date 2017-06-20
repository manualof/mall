<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <heshudong@ibenchu.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-05-09 11:57
 */
namespace Notadd\Mall\Handlers\Admin\Shop\Category;

use Notadd\Foundation\Routing\Abstracts\Handler;
use Notadd\Mall\Models\StoreCategory;

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
        $builder = StoreCategory::query();
        $this->withCode(200)->withData($builder->get())->withMessage('');
    }
}
