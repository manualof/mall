<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <269044570@qq.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-07-05 14:15
 */
namespace Notadd\Mall\Models;

use Notadd\Foundation\Database\Model;

/**
 * Class UserFollow.
 */
class UserFollow extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'product_id',
        'store_id',
        'user_id',
    ];

    /**
     * @var string
     */
    protected $table = 'mall_user_follows';
}
