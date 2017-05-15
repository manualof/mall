<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <269044570@qq.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-05-09 20:00
 */
namespace Notadd\Mall\Models;

use Notadd\Foundation\Database\Model;

/**
 * Class ProductDetail.
 */
class ProductDetail extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'content_pc',
        'content_mobile',
        'product_id',
    ];

    /**
     * @var string
     */
    protected $table = 'mall_product_details';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function product()
    {
        return $this->hasOne(Product::class, 'id', 'product_id');
    }
}
