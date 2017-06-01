<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <269044570@qq.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-06-01 18:15
 */
namespace Notadd\Mall\Entities;

use Notadd\Foundation\Flow\Abstracts\Entity;

/**
 * Class ProductSpecification.
 */
class ProductSpecification extends Entity
{
    /**
     * @return string
     */
    public function name()
    {
        return 'mall.specification';
    }
}
