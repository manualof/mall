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
use Symfony\Component\Workflow\Transition;

/**
 * Class Order.
 */
class Order extends Entity
{
    public function announceCancel()
    {
    }

    public function announceDeliver()
    {
    }

    public function announcePay()
    {
    }

    public function announceTake()
    {
    }

    public function enterCancel()
    {
    }

    public function enterCancelled()
    {
    }

    public function enterDeliver()
    {
    }

    public function enterDelivered()
    {
    }

    public function enterPay()
    {
    }

    public function enterPayed()
    {
    }

    public function enterTake()
    {
    }

    public function enterTook()
    {
    }

    public function enteredCancel()
    {
    }

    public function enteredCancelled()
    {
    }

    public function enteredDeliver()
    {
    }

    public function enteredDelivered()
    {
    }

    public function enteredPay()
    {
    }

    public function enteredPayed()
    {
    }

    public function enteredTake()
    {
    }

    public function enteredTook()
    {
    }

    public function guardDeliver()
    {
    }

    public function guardPay()
    {
    }

    public function guardTake()
    {
    }

    public function leaveCancel()
    {
    }

    public function leaveCancelled()
    {
    }

    public function leaveDeliver()
    {
    }

    public function leaveDelivered()
    {
    }

    public function leavePay()
    {
    }

    public function leavePayed()
    {
    }

    public function leaveTake()
    {
    }

    public function leaveTook()
    {
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
        return [
            'cancel',    // 取消
            'cancelled', // 已取消
            'pay',       // 等待支付
            'payed',     // 支付完成
            'deliver',   // 等待发货
            'delivered', // 发货完成
            'take',      // 等待收货
            'took',      // 收货完成
        ];
    }

    public function transitionCancel()
    {
    }

    public function transitionDeliver()
    {
    }

    public function transitionPay()
    {
    }

    /**
     * @return array
     */
    public function transitions()
    {
        return [
            new Transition('cancel', 'cancel', 'cancelled'),
            new Transition('deliver', 'deliver', 'delivered'),
            new Transition('pay', 'pay', 'payed'),
            new Transition('take', 'take', 'took'),
        ];
    }

    public function transitionTake()
    {
    }
}