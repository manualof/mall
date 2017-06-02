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

    /**
     * @return array
     */
    public function events()
    {
        return [
            'flow.mall.order.announce.cancel'    => 'announceCancel',
            'flow.mall.order.announce.deliver'   => 'announceDeliver',
            'flow.mall.order.announce.pay'       => 'announcePay',
            'flow.mall.order.announce.take'      => 'announceTake',
            'flow.mall.order.enter.cancel'       => 'enterCancel',
            'flow.mall.order.enter.cancelled'    => 'enterCancelled',
            'flow.mall.order.enter.deliver'      => 'enterDeliver',
            'flow.mall.order.enter.delivered'    => 'enterDelivered',
            'flow.mall.order.enter.pay'          => 'enterPay',
            'flow.mall.order.enter.payed'        => 'enterPayed',
            'flow.mall.order.enter.take'         => 'enterTake',
            'flow.mall.order.enter.took'         => 'enterTook',
            'flow.mall.order.entered.cancel'     => 'enteredCancel',
            'flow.mall.order.entered.cancelled'  => 'enteredCancelled',
            'flow.mall.order.entered.deliver'    => 'enteredDeliver',
            'flow.mall.order.entered.delivered'  => 'enteredDelivered',
            'flow.mall.order.entered.pay'        => 'enteredPay',
            'flow.mall.order.entered.payed'      => 'enteredPayed',
            'flow.mall.order.entered.take'       => 'enteredTake',
            'flow.mall.order.entered.took'       => 'enteredTook',
            'flow.mall.order.guard.deliver'      => 'guardDeliver',
            'flow.mall.order.guard.cancel'       => 'guardCancel',
            'flow.mall.order.guard.pay'          => 'guardPay',
            'flow.mall.order.guard.take'         => 'guardTake',
            'flow.mall.order.leave.cancel'       => 'leaveCancel',
            'flow.mall.order.leave.cancelled'    => 'leaveCancelled',
            'flow.mall.order.leave.deliver'      => 'leaveDeliver',
            'flow.mall.order.leave.delivered'    => 'leaveDelivered',
            'flow.mall.order.leave.pay'          => 'leavePay',
            'flow.mall.order.leave.payed'        => 'leavePayed',
            'flow.mall.order.leave.take'         => 'leaveTake',
            'flow.mall.order.leave.took'         => 'leaveTook',
            'flow.mall.order.transition.cancel'  => 'transitionCancel',
            'flow.mall.order.transition.deliver' => 'transitionDeliver',
            'flow.mall.order.transition.pay'     => 'transitionPay',
            'flow.mall.order.transition.take'    => 'transitionTake',
        ];
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