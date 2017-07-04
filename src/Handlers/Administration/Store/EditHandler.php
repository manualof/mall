<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <heshudong@ibenchu.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-05-03 16:44
 */
namespace Notadd\Mall\Handlers\Administration\Store;

use Notadd\Foundation\Routing\Abstracts\Handler;
use Notadd\Mall\Models\Store;

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
            'category_id' => 'numeric',
            'id'          => 'required|numeric',
            'name'        => 'required',
            'status'      => 'in:review,opening,closed,banned',
            'user_id'     => 'numeric',
        ], [
            'category_id.numeric' => '所属分类 ID 必须为数值',
            'id.numeric'          => '店铺 ID 必须填写',
            'id.required'         => '店铺 ID 必须为数值',
            'name.required'       => '店铺名称必须填写',
            'user_id.numeric'     => '店铺所有者 ID 必须为数值',
            'status.in'           => '店铺状态不在允许的范围内',
        ]);
        $this->beginTransaction();
        $data = $this->request->only([
            'address',
            'category_id',
            'company',
            'end_at',
            'flow_marketing',
            'level',
            'location',
            'name',
            'open_at',
            'status',
            'user_id',
        ]);
        $store = Store::query()->find($this->request->input('id'));
        if ($store instanceof Store && $store->update($data)) {
            $this->commitTransaction();
            $this->withCode(200)->withMessage('');
        } else {
            $this->rollBackTransaction();
            $this->withCode(500)->withError('');
        }
    }
}
