<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <269044570@qq.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-05-09 15:05
 */
namespace Notadd\Mall\Models;

use Notadd\Foundation\Database\Model;

/**
 * Class ShopCategory.
 */
class ShopCategory extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'amount_of_deposit',
        'order',
        'parent_id',
        'name',
    ];

    /**
     * @var string
     */
    protected $table = 'mall_shop_categories';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function parent()
    {
        return $this->hasOne(ShopCategory::class, 'id', 'parent_id');
    }
}
