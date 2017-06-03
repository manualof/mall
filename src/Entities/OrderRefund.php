<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <269044570@qq.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-06-01 18:12
 */
namespace Notadd\Mall\Entities;

use Notadd\Foundation\Flow\Abstracts\Entity;
use Symfony\Component\Workflow\Transition;

/**
 * Class OrderRefund.
 */
class OrderRefund extends Entity
{
    /**
     * @return string
     */
    public function name()
    {
        return 'mall.refund';
    }

    /**
     * @return array
     */
    public function places()
    {
        return [
            'launch',      // 发起退款
            'launched',    // 发起完成
            'review',      // 审核退款
            'reviewed',    // 审核完成
            'reject',      // 拒绝
            'rejected',    // 拒绝完成
            'refund',      // 退货
            'refunded',    // 退货完成
            'reimburse',   // 退款
            'reimbursed',  // 退款完成
        ];
    }

    /**
     * @return array
     */
    public function transitions()
    {
        return [
            new Transition('launch', 'launch', 'launched'),
            new Transition('review', 'review', 'review'),
            new Transition('reject', 'reject', 'rejected'),
            new Transition('refund', 'refund', 'refund'),
            new Transition('reimburse', 'reimburse', 'reimburse'),
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
