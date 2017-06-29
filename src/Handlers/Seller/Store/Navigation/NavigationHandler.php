<?php
/**
 * This file is part of Notadd.
 *
 * @author        TwilRoad <heshudong@ibenchu.com>
 * @copyright (c) 2017, notadd.com
 * @datetime      2017-05-23 18:07
 */
namespace Notadd\Mall\Handlers\Seller\Store\Navigation;

use Notadd\Foundation\Routing\Abstracts\Handler;
use Notadd\Mall\Models\StoreNavigation;

/**
 * Class NavigationHandler.
 */
class NavigationHandler extends Handler
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
            'id.required' => '导航 ID 必须填写',
            'id.numeric'  => '导航 ID 必须为数值',
        ]);
        $navigation = StoreNavigation::query()->find($this->request->input('id'));
        if ($navigation instanceof StoreNavigation) {
            $this->withCode(200)->withData($navigation)->withMessage('获取店铺导航信息成功！');
        } else {
            $this->withCode(500)->withError('没有对应的店铺导航信息！');
        }
    }
}
