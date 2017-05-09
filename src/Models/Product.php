<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <269044570@qq.com>
 * @copyright (c) 2017, iBenchu.org
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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function categories()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
