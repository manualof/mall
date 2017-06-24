<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <269044570@qq.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-06-24 16:42
 */
namespace Notadd\Mall\Models;

use Notadd\Foundation\Database\Model;

/**
 * Class Member.
 */
class Member extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        '',
    ];

    /**
     * @var string
     */
    protected $table = 'mall_members';
}
