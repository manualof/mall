<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <269044570@qq.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-07-15 18:55
 */
namespace Notadd\Mall\Models;

use Notadd\Foundation\Database\Model;

/**
 * Class StoreGrade.
 */
class StoreGrade extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'description',
        'level',
        'name',
        'picture_limit',
        'price',
        'product_limit',
    ];

    /**
     * @var string
     */
    protected $table = 'mall_store_grades';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function stores()
    {
        return $this->hasMany(Store::class);
    }
}
