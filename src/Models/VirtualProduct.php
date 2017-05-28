<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <heshudong@ibenchu.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-04-26 14:29
 */
namespace Notadd\Mall\Models;

use Notadd\Foundation\Database\Model;

/**
 * Class VirtualProduct.
 */
class VirtualProduct extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'amount',
        'expiration_date',
        'key',
        'product_id',
        'url',
    ];

    /**
     * @var string
     */
    protected $table = 'mall_virtual_products';
}
