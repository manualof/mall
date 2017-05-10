<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <269044570@qq.com>
 * @copyright (c) 2017, iBenchu.org
 * @datetime 2017-05-09 18:25
 */
namespace Notadd\Mall\Models;

use Notadd\Foundation\Database\Model;

/**
 * Class ProductBrand.
 */
class ProductBrand extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'category_id',
        'logo',
        'name',
        'order',
        'recommend',
        'show',
    ];

    /**
     * @var string
     */
    protected $table = 'mall_product_brands';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function category()
    {
        return $this->hasOne(ProductCategory::class, 'id', 'category_id');
    }
}
