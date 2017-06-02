<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <269044570@qq.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-06-01 16:05
 */
namespace Notadd\Mall\Entities;

use Notadd\Foundation\Flow\Abstracts\Entity;

/**
 * Class Order.
 */
class Order extends Entity
{
    /**
     * @return array
     */
    public function events()
    {
        return [];
    }

    /**
     * @return string
     */
    public function name()
    {
        return 'mall.order';
    }

    /**
     * @return array
     */
    public function places()
    {
        return [];
    }

    /**
     * @return array
     */
    public function transitions()
    {
        return [];
    }
}