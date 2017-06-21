<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <heshudong@ibenchu.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-05-09 12:10
 */
namespace Notadd\Mall\Handlers\Admin\Store\Category;

use Notadd\Foundation\Routing\Abstracts\Handler;

/**
 * Class CategoryHandler.
 */
class CategoryHandler extends Handler
{
    /**
     * Execute Handler.
     *
     * @throws \Exception
     */
    protected function execute()
    {
        $id = $this->request->input('id');
    }
}
