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
use Symfony\Component\Workflow\Transition;

/**
 * Class StoreDynamic.
 */
class StoreDynamic extends Entity
{
    /**
     * @return string
     */
    public function name()
    {
        return 'mall.store.dynamic';
    }

    /**
     * @return array
     */
    public function places()
    {
        return [
            'create',
            'created',
            'edit',
            'edited',
            'remove',
            'removed',
            'publish',
            'published',
        ];
    }

    /**
     * @return array
     */
    public function transitions()
    {
        return [
            new Transition('create', 'create', 'created'),
            new Transition('edit', 'edit', 'edited'),
            new Transition('remove', 'remove', 'removed'),
            new Transition('publish', 'publish', 'published'),
        ];
    }
}
