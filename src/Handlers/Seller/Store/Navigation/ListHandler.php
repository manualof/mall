<?php
/**
 * This file is part of Notadd.
 *
 * @author        TwilRoad <heshudong@ibenchu.com>
 * @copyright (c) 2017, notadd.com
 * @datetime      2017-05-23 17:46
 */
namespace Notadd\Mall\Handlers\Seller\Store\Navigation;

use Notadd\Foundation\Routing\Abstracts\Handler;
use Notadd\Mall\Models\StoreNavigation;

/**
 * Class ListHandler.
 */
class ListHandler extends Handler
{
    /**
     * Execute Handler.
     *
     * @throws \Exception
     */
    protected function execute()
    {
        $this->validate($this->request, [
            'page'     => 'numeric',
            'paginate' => 'numeric',
            'store_id' => 'required|numeric',
        ], [
            'page.numeric'     => '当前页面必须为数值',
            'paginate.numeric' => '分页数必须为数值',
            'store_id.numeric'  => '店铺 ID 必须为数值',
            'store_id.required' => '店铺 ID 必须填写',
        ]);
        $builder = StoreNavigation::query();
        $data = $builder->where('store_id', $this->request->input('store_id'))->get();
        $this->withCode(200)->withData($data)->withMessage('获取店铺导航列表成功！');
    }
}
