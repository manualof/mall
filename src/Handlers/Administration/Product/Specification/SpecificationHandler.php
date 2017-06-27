<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <269044570@qq.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-06-21 20:33
 */
namespace Notadd\Mall\Handlers\Administration\Product\Specification;

use Notadd\Foundation\Routing\Abstracts\Handler;
use Notadd\Mall\Models\ProductSpecification;

/**
 * Class SpecificationHandler.
 */
class SpecificationHandler extends Handler
{
    /**
     * Execute Handler.
     *
     * @throws \Exception
     */
    protected function execute()
    {
        $this->validate($this->request, [
            'id' => 'required|numeric',
        ], [
            'id.numeric'  => '规格 ID 必须为数值',
            'id.required' => '规格 ID 必须填写',
        ]);
        $specification = ProductSpecification::query()->find($this->request->input('id'));
        if ($specification instanceof ProductSpecification) {
            $this->withCode(200)->withData($specification)->withMessage('获取产品规格数据成功！');
        } else {
            $this->withCode(500)->withError('没有对应的产品规格信息！');
        }
    }
}
