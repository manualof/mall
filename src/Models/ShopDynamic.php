<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <heshudong@ibenchu.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-05-09 15:04
 */
namespace Notadd\Mall\Models;

use Notadd\Foundation\Database\Model;
use Notadd\Member\Models\Member;

/**
 * Class ShopDynamic.
 */
class ShopDynamic extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'content',
        'shop_id',
        'show',
        'title',
        'user_id',
    ];

    /**
     * @var string
     */
    protected $table = 'mall_shop_dynamics';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function shop()
    {
        return $this->hasOne(Shop::class, 'id', 'shop_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne(Member::class, 'id', 'user_id');
    }
}
