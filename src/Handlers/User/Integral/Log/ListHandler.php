<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <269044570@qq.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-07-05 14:56
 */
namespace Notadd\Mall\Handlers\User\Integral\Log;

use Notadd\Foundation\Routing\Abstracts\Handler;
use Notadd\Mall\Models\UserIntegralLog;

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
            'order'    => 'in:asc,desc',
            'page'     => 'numeric',
            'paginate' => 'numeric',
            'user_id'  => 'required|numeric',
        ], [
            'order.in'         => '排序规则错误',
            'page.numeric'     => '当前页面必须为数值',
            'paginate.numeric' => '分页数必须为数值',
            'user_id.numeric'  => '用户 ID 必须为数值',
            'user_id.required' => '用户 ID 必须填写',
        ]);
        $builder = UserIntegralLog::query();
        $builder->where('user_id', $this->request->input('id'));
        $builder->orderBy('created_at', $this->request->input('order', 'desc'));
        $builder = $builder->paginate($this->request->input('paginate', 20));
        $this->withCode(200)->withData($builder->items())->withMessage('获取订单列表成功！')->withExtra([
            'pagination' => [
                'total'         => $builder->total(),
                'per_page'      => $builder->perPage(),
                'current_page'  => $builder->currentPage(),
                'last_page'     => $builder->lastPage(),
                'next_page_url' => $builder->nextPageUrl(),
                'prev_page_url' => $builder->previousPageUrl(),
                'from'          => $builder->firstItem(),
                'to'            => $builder->lastItem(),
            ],
        ]);
    }
}
