<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <269044570@qq.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-06-27 17:33
 */
namespace Notadd\Mall\Handlers\Seller\Store\Outlet;

use Notadd\Foundation\Routing\Abstracts\Handler;
use Notadd\Mall\Models\StoreOutlet;

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
    protected function execute()
    {
        $this->validate($this->request, [
            'address'   => 'required',
            'id'        => 'required|numeric',
            'name'      => 'required',
            'store_id'  => 'required|numeric',
            'telephone' => 'required',
        ], [
            'address.required'   => '详细地址必须填写',
            'id.numeric'         => '供应商 ID 必须为数值',
            'id.required'        => '供应商 ID 必须填写',
            'name.required'      => '门店名称必须填写',
            'store_id.numeric'   => '店铺 ID 必须为数值',
            'store_id.required'  => '店铺 ID 必须填写',
            'telephone.required' => '公交信息必须填写',
        ]);
        $this->beginTransaction();
        $data = $this->request->only([
            'address',
            'bus_information',
            'name',
            'store_id',
            'telephone',
        ]);
        $outlet = StoreOutlet::query()->find($this->request->input('id'));
        if ($outlet instanceof StoreOutlet && $outlet->update($data)) {
            $this->commitTransaction();
            $this->withCode(200)->withMessage('编辑门店信息成功！');
        } else {
            $this->rollBackTransaction();
            $this->withCode(500)->withError('没有对应的门店信息！');
        }
    }
}
