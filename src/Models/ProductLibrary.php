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
        'category_id',
        'delivery_area',
        'description',
        'description_mobile',
        'flow_marketing',
        'image',
        'inventory',
        'inventory_warning',
        'name',
        'price_range',
        'production_place',
        'public_praise',
        'selling_point',
        'size',
        'weight',
    ];

    /**
     * @var string
     */
    protected $table = 'mall_product_libraries';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function brand()
    {
        return $this->belongsTo(ProductBrand::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(ProductCategory::class);
    }

    /**
     * @param $value
     */
    public function setBrandIdAttribute($value)
    {
        $this->attributes['brand_id'] = is_null($value) ? 0 : $value;
    }

    /**
     * @param $value
     */
    public function setCategoryIdAttribute($value)
    {
        $this->attributes['category_id'] = is_null($value) ? 0 : $value;
    }
}
