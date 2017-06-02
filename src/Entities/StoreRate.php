<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <269044570@qq.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-06-01 16:07
 */
namespace Notadd\Mall\Entities;

use Notadd\Foundation\Flow\Abstracts\Entity;

/**
 * Class StoreRate.
 */
class StoreRate extends Entity
{
    /**
     * @return string
     */
    public function name()
    {
        return 'mall.store.rate';
    }

    /**
     * @return array
     */
    public function places()
    {
        return [];
    }
}
