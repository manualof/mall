<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <269044570@qq.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-06-27 17:24
 */
namespace Notadd\Mall\Handlers\Seller\Store\Outlet;

use Notadd\Foundation\Routing\Abstracts\Handler;
use Notadd\Mall\Models\StoreOutlet;

/**
 * Class OutletHandler.
 */
class OutletHandler extends Handler
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
            'id.numeric'  => '门店 ID 必须为数值',
            'id.required' => '门店 ID 必须填写',
        ]);
        $outlet = StoreOutlet::query()->find($this->request->input('id'));
        if ($outlet instanceof StoreOutlet) {
            $this->withCode(200)->withData($outlet)->withMessage('获取门店信息成功！');
        } else {
            $this->withCode(500)->withError('没有对应的门店信息！');
        }
    }
}
