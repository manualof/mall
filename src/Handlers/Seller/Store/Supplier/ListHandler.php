<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <269044570@qq.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-06-27 17:22
 */
namespace Notadd\Mall\Handlers\Seller\Store\Supplier;

use Illuminate\Validation\Rule;
use Notadd\Foundation\Routing\Abstracts\Handler;
use Notadd\Mall\Models\StoreSupplier;

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
            'store_id' => [
                Rule::exists('mall_stores'),
                'numeric',
                'required',
            ],
        ], [
            'order.in'          => '排序规则错误',
            'page.numeric'      => '当前页面必须为数值',
            'paginate.numeric'  => '分页数必须为数值',
            'store_id.exists'   => '没有对应的店铺信息',
            'store_id.numeric'  => '店铺 ID 必须为数值',
            'store_id.required' => '店铺 ID 必须填写',
        ]);
        $builder = StoreSupplier::query();
        $builder->where('store_id', $this->request->input('store_id'));
        $builder->orderBy('created_at', $this->request->input('order', 'desc'));
        $builder = $builder->paginate($this->request->input('paginate', 20));
        $this->withCode(200)->withData($builder->items())->withMessage('获取供应商列表成功！')->withExtra([
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
