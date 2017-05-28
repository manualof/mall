<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <heshudong@ibenchu.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-04-25 16:36
 */
namespace Notadd\Mall\Models;

use Notadd\Foundation\Database\Model;

/**
 * Class OrderDetail.
 */
class OrderDetail extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'order_id',
        'product_id',
        'price',
        'quantity',
        'status',
        'delivery_date',
        'rate',
        'rate_comment',
    ];

    /**
     * @var string
     */
    protected $table = 'mall_order_details';

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
    public function product()
    {
        return $this->hasOne(Product::class, 'id', 'product_id');
    }
}
