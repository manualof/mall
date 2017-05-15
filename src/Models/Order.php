<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <269044570@qq.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-04-25 16:35
 */
namespace Notadd\Mall\Models;

use Notadd\Foundation\Database\Model;
use Notadd\Member\Models\Member;

/**
 * Class Order.
 */
class Order extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'address_id',
        'description',
        'end_date',
        'shop_id',
        'status',
        'type',
        'user_id',
    ];

    /**
     * @var string
     */
    protected $table = 'mall_orders';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne(Member::class, 'id', 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function address()
    {
        return $this->hasOne(Address::class, 'id', 'address_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function shop()
    {
        return $this->hasOne(Shop::class, 'id', 'shop_id');
    }
}
