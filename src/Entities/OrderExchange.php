<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <269044570@qq.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-06-01 18:11
 */
namespace Notadd\Mall\Entities;

use Notadd\Foundation\Flow\Abstracts\Entity;
use Symfony\Component\Workflow\Transition;

/**
 * Class OrderExchange.
 */
class OrderExchange extends Entity
{
    /**
     * @return string
     */
    public function name()
    {
        return 'mall.order.exchange';
    }

    /**
     * @return array
     */
    public function places()
    {
        return [
            'deliver',
            'delivered',
            'launch',
            'launched',
            'send',
            'sent',
            'take',
            'took',
        ];
    }

    /**
     * @return array
     */
    public function transitions()
    {
        return [
            new Transition('deliver', 'deliver', 'delivered'),
            new Transition('launch', 'launch', 'launched'),
            new Transition('send', 'send', 'sent'),
            new Transition('take', 'take', 'took'),
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
