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
use Symfony\Component\Workflow\Event\GuardEvent;
use Symfony\Component\Workflow\Transition;

/**
 * Class Order.
 */
class Order extends Entity
{
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
        return [
            'cancel',    // 取消
            'cancelled', // 已取消
            'deliver',   // 等待发货
            'delivered', // 发货完成
            'launch',    // 发起订单
            'launched',  // 发起完成
            'pay',       // 等待支付
            'payed',     // 支付完成
            'take',      // 等待收货
            'took',      // 收货完成
        ];
    }
    /**
     * @return array
     */
    public function transitions()
    {
        return [
            new Transition('cancel', 'cancel', 'cancelled'),
            new Transition('deliver', 'deliver', 'delivered'),
            new Transition('launch', 'launch', 'launched'),
            new Transition('pay', 'pay', 'payed'),
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
     *
     * @param \Symfony\Component\Workflow\Event\GuardEvent $event
     */
    public function guard(GuardEvent $event)
    {
        $event->setBlocked(true);
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
        dd(func_get_args());
        // TODO: Implement transition() method.
    }
}
