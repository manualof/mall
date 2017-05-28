<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <heshudong@ibenchu.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-04-24 17:48
 */
namespace Notadd\Mall\Models;

use Notadd\Foundation\Database\Model;

/**
 * Class Product.
 */
class Product extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'barcode',
        'brand_id',
        'category_id',
        'description',
        'name',
        'weight',
        'size',
    ];

    /**
     * @var string
     */
    protected $table = 'mall_products';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function brand()
    {
        return $this->hasOne(ProductBrand::class, 'id', 'brand_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function category()
    {
        return $this->hasOne(ProductCategory::class, 'id', 'category_id');
    }
}
