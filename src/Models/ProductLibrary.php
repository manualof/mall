<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <269044570@qq.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-07-12 11:13
 */
namespace Notadd\Mall\Models;

use Notadd\Foundation\Database\Model;

/**
 * Class ProductLibrary.
 */
class ProductLibrary extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'barcode',
        'brand_id',
        'business_item',
        'category_id',
        'description',
        'flow_marketing',
        'name',
        'price',
        'price_cost',
        'price_market',
        'inventory',
        'inventory_warning',
    ];

    /**
     * @var string
     */
    protected $table = 'mall_product_libraries';
}
