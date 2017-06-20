<?php
/**
 * This file is part of Notadd.
 *
 * @author        TwilRoad <heshudong@ibenchu.com>
 * @copyright (c) 2017, notadd.com
 * @datetime      2017-05-23 20:07
 */
namespace Notadd\Mall\Handlers\Seller\Product\Specification;

use Notadd\Foundation\Routing\Abstracts\Handler;
use Notadd\Mall\Models\ProductSpecification;

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
        $this->validate($this->request, [
            'id' => 'required|numeric',
        ], [
            'id.numeric'  => '规格 ID 必须为数值',
            'id.required' => '规格 ID 必须填写',
        ]);
        $this->database->beginTransaction();
        $specification = ProductSpecification::query()->find($this->request->input('id'));
        if ($specification instanceof ProductSpecification && $specification->delete()) {
            $this->database->commit();
            $this->withCode(200)->withMessage('删除产品规格成功！');
        } else {
            $this->database->rollBack();
            $this->withCode(500)->withError('删除产品规格失败！');
        }
    }
}
