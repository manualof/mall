<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <heshudong@ibenchu.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-05-09 15:48
 */
namespace Notadd\Mall\Models;

use Notadd\Foundation\Database\Model;

/**
 * Class ProductCategory.
 */
class ProductCategory extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'commission',
        'commission_inherit',
        'identification',
        'name',
        'order',
        'parent_id',
        'show',
    ];

    /**
     * @var string
     */
    protected $table = 'mall_product_categories';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function parent()
    {
        return $this->hasOne(ProductCategory::class, 'id', 'category_id');
    }
}
