<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <269044570@qq.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-07-15 20:00
 */
namespace Notadd\Mall\Handlers\Administration\Store\Grade;

use Notadd\Foundation\Routing\Abstracts\Handler;
use Notadd\Foundation\Validation\Rule;
use Notadd\Mall\Models\StoreGrade;

/**
 * Class CreateHandler.
 */
class CreateHandler extends Handler
{
    /**
     * Execute Handler.
     *
     * @throws \Exception
     */
    protected function execute()
    {
        $this->validate($this->request, [
            'description'   => Rule::required(),
            'level'         => Rule::numeric(),
            'name'          => Rule::required(),
            'picture_limit' => Rule::numeric(),
            'price'         => Rule::numeric(),
            'product_limit' => Rule::numeric(),
        ], [
            'description.required'  => '申请说明必须填写',
            'level.numeric'         => '店铺等级必须为数值',
            'name.required'         => '等级名称必须填写',
            'picture_limit.numeric' => '可上传图片数必须为数值',
            'price.numeric'         => '收费标准必须为数值',
            'product_limit.numeric' => '可发布商品数必须为数值',
        ]);
        $this->beginTransaction();
        $data = $this->request->only([
            'description',
            'level',
            'name',
            'picture_limit',
            'price',
            'product_limit',
        ]);
        if (StoreGrade::query()->create($data)) {
            $this->withCode(200)->withMessage('创建店铺等级信息成功！');
        } else {
            $this->withCode(500)->withError('创建店铺等级信息失败！');
        }
    }
}
