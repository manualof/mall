<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <269044570@qq.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-06-01 16:06
 */
namespace Notadd\Mall\Entities;

use Notadd\Foundation\Flow\Abstracts\Entity;

/**
 * Class Pay.
 */
class Pay extends Entity
{
    /**
     * @return string
     */
    public function name()
    {
        return 'mall.pay';
    }

    /**
     * @return array
     */
    public function places()
    {
        return [];
    }
}
