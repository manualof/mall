<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <269044570@qq.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-06-29 17:03
 */
namespace Notadd\Mall\Handlers\User\Integral;

use Notadd\Foundation\Routing\Abstracts\Handler;
use Notadd\Mall\Models\UserIntegralLog;

/**
 * Class LogHandler.
 */
class LogHandler extends Handler
{
    /**
     * Execute Handler.
     *
     * @throws \Exception
     */
    protected function execute()
    {
        $this->validate($this->request, [
            'user_id' => 'required|numeric',
        ], [
            'user_id.numeric'  => '用户 ID 必须为数值',
            'user_id.required' => '用户 ID 必须填写',
        ]);
        $logs = UserIntegralLog::query()->where('user_id', $this->request->input('user_id'))->get();
        $this->withCode(200)->withData($logs)->withMessage('获取用户积分记录成功！');
    }
}
