<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <heshudong@ibenchu.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-05-09 14:58
 */
namespace Notadd\Mall\Models;

use Notadd\Foundation\Database\Model;
use Notadd\Member\Models\Member;

/**
 * Class OrderExchange.
 */
class OrderExchange extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'amount',
        'address_for_take',
        'address_for_exchange',
        'express_id_for_receive',
        'express_id_for_exchange',
        'order_id',
        'reason',
        'remark',
        'response',
        'user_id',
    ];

    /**
     * @var string
     */
    protected $table = 'mall_order_exchanges';

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
