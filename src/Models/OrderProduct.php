<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <269044570@qq.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-07-20 14:25
 */
namespace Notadd\Mall\Models;

use Notadd\Foundation\Database\Model;

/**
 * Class OrderProduct.
 */
class OrderProduct extends Model
{
    /**
     * @var array
     */
    protected $fillable = [];

    /**
     * @var string
     */
    protected $table = 'mall_order_products';
}
