<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <269044570@qq.com>
 * @copyright (c) 2017, iBenchu.org
 * @datetime 2017-05-09 14:57
 */
namespace Notadd\Mall\Models;

use Notadd\Foundation\Database\Model;

/**
 * Class OrderRefund.
 */
class OrderRefund extends Model
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
        'pay',
        'reason',
        'remark',
        'response',
        'user_id',
        'shop_id',
    ];

    /**
     * @var string
     */
    protected $table = 'mall_order_refunds';
}
