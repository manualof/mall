<?php
/**
 * This file is part of Notadd.
 *
 * @author        TwilRoad <heshudong@ibenchu.com>
 * @copyright (c) 2017, notadd.com
 * @datetime      2017-05-24 13:34
 */
namespace Notadd\Mall\Handlers\User\Card;

use Notadd\Foundation\Routing\Abstracts\Handler;
use Notadd\Mall\Models\UserCart;

/**
 * Class AddHandler.
 */
class AddHandler extends Handler
{
    /**
     * Execute Handler.
     *
     * @throws \Exception
     */
    public function execute()
    {
        $this->validate($this->request, [
            'product_id' => 'required|numeric',
            'store_id'   => 'required|numeric',
            'user_id'    => 'required|numeric',
        ], [
            'product_id.numeric'  => '商品 ID 必须为数值',
            'product_id.required' => '商品 ID 必须填写',
            'store_id.numeric'    => '店铺 ID 必须为数值',
            'store_id.required'   => '店铺 ID 必须填写',
            'user_id.numeric'     => '用户 ID 必须为数值',
            'user_id.required'    => '用户 ID 必须填写',
        ]);
        $this->beginTransaction();
        $data = $this->request->only([
            'price',
            'product_id',
            'store_id',
            'user_id',
        ]);
        if (UserCart::query()->create($data)) {
            $this->commitTransaction();
            $this->withCode(200)->withMessage('添加商品到购物车成功！');
        } else {
            $this->rollBackTransaction();
            $this->withCode(500)->withError('添加商品到购物车失败！');
        }
    }
}
