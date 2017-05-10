<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <269044570@qq.com>
 * @copyright (c) 2017, iBenchu.org
 * @datetime 2017-05-09 15:08
 */
namespace Notadd\Mall\Models;

use Notadd\Foundation\Database\Model;

/**
 * Class Shop.
 */
class Shop extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'address',
        'avatar',
        'category_id',
        'company',
        'end_at',
        'identification',
        'level',
        'location',
        'logo',
        'name',
        'open_at',
        'status',
    ];

    /**
     * @var string
     */
    protected $table = 'mall_shops';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function category()
    {
        return $this->hasOne(ShopCategory::class, 'id', 'category_id');
    }
}
