<?php
/**
 * This file is part of Notadd.
 *
 * @author        TwilRoad <heshudong@ibenchu.com>
 * @copyright (c) 2017, notadd.com
 * @datetime      2017-05-23 18:04
 */
namespace Notadd\Mall\Handlers\Seller\Store\Navigation;

use Notadd\Foundation\Routing\Abstracts\Handler;
use Notadd\Mall\Models\StoreNavigation;

/**
 * Class EditHandler.
 */
class EditHandler extends Handler
{
    /**
     * Execute Handler.
     *
     * @throws \Exception
     */
    public function execute()
    {
        $this->validate($this->request, [
            'id'            => 'required|numeric',
            'is_show'       => 'numeric',
            'name'          => 'required',
            'order'         => 'numeric',
            'parent_target' => 'numeric',
        ], [
            'id.required'           => '导航 ID 必须填写',
            'id.numeric'            => '导航 ID 必须为数值',
            'is_show.numeric'       => '是否显示的值必须为数值',
            'name.required'         => '导航名称必须填写',
            'order.numeric'         => '排序的值必须为数值',
            'parent_target.numeric' => '新窗口打开的值必须为数值',
        ]);
        $this->beginTransaction();
        $data = $this->request->only([
            'is_show',
            'name',
            'order',
            'parent_target',
            'url',
        ]);
        $navigation = StoreNavigation::query()->find($this->request->input('id'));
        if ($navigation instanceof StoreNavigation && $navigation->update($data)) {
            $this->commitTransaction();
            $this->withCode(200)->withMessage('编辑店铺导航成功！');
        } else {
            $this->rollBackTransaction();
            $this->withCode(500)->withError('没有对应的店铺导航信息！');
        }
    }
}
