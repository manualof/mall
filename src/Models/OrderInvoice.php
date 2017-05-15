<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <269044570@qq.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-05-09 15:45
 */
namespace Notadd\Mall\Models;

use Notadd\Foundation\Database\Model;
use Notadd\Member\Models\Member;

/**
 * Class OrderInvoice.
 */
class OrderInvoice extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'content',
        'order_id',
        'title',
        'type',
        'user_id',
    ];

    /**
     * @var string
     */
    protected $table = 'mall_order_invoices';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function order()
    {
        return $this->hasOne(Order::class, 'id', 'order_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne(Member::class, 'id', 'user_id');
    }
}
