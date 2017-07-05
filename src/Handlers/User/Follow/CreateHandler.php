<?php
/**
 * This file is part of Notadd.
 *
 * @author        TwilRoad <heshudong@ibenchu.com>
 * @copyright (c) 2017, notadd.com
 * @datetime      2017-05-24 16:50
 */
namespace Notadd\Mall\Handlers\User\Follow;

use Notadd\Foundation\Routing\Abstracts\Handler;
use Notadd\Mall\Models\UserFollow;

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
            'product_id',
            'store_id',
            'user_id',
        ]);
        if (UserFollow::query()->create($data)) {
            $this->commitTransaction();
            $this->withCode(200)->withMessage('创建用户收藏信息成功！');
        } else {
            $this->rollBackTransaction();
            $this->withCode(500)->withError('创建用户收藏信息失败！');
        }
    }
}
