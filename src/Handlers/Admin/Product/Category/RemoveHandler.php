<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <heshudong@ibenchu.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-04-25 17:22
 */
namespace Notadd\Mall\Handlers\Admin\Product\Category;

use Notadd\Foundation\Routing\Abstracts\Handler;
use Notadd\Mall\Models\ProductCategory;

/**
 * Class RemoveHandler.
 */
class RemoveHandler extends Handler
{
    /**
     * Execute Handler.
     *
     * @throws \Exception
     */
    public function execute()
    {
        $id = $this->request->input('id');
        $category = ProductCategory::query()->find($id);
        if ($category && $category->delete()) {
            $this->withCode(200)->withMessage('');
        } else {
            $this->withCode(500)->withError('');
        }
    }
}
