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
use Symfony\Component\Workflow\Transition;

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
        return [
            'rate',      // 评价
            'rated',     // 评价完胜
            'review',    // 审核
            'reviewed',  // 审核完成
        ];
    }

    /**
     * @return array
     */
    public function transitions()
    {
        return [
            new Transition('rate', 'rate', 'rated'),
            new Transition('review', 'review', 'reviewed'),
        ];
    }

    /**
     * Announce a transition.
     */
    public function announce()
    {
        // TODO: Implement announce() method.
    }

    /**
     * Enter a place.
     */
    public function enter()
    {
        // TODO: Implement enter() method.
    }

    /**
     * Entered a place.
     */
    public function entered()
    {
        // TODO: Implement entered() method.
    }

    /**
     * Guard a transition.
     */
    public function guard()
    {
        // TODO: Implement guard() method.
    }

    /**
     * Leave a place.
     */
    public function leave()
    {
        // TODO: Implement leave() method.
    }

    /**
     * Into a transition.
     */
    public function transition()
    {
        // TODO: Implement transition() method.
    }
}
