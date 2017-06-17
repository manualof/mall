<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <269044570@qq.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-06-01 18:12
 */
namespace Notadd\Mall\Flows;

use Notadd\Foundation\Flow\Abstracts\Entity;
use Symfony\Component\Workflow\Event\GuardEvent;
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
            new Transition('wait_to_review', 'launched', 'review'),
            new Transition('review', 'review', 'review'),
            new Transition('wait_to_refund', 'review', 'refund'),
            new Transition('need_to_reject', 'review', 'reject'),
            new Transition('reject', 'reject', 'rejected'),
            new Transition('refund', 'refund', 'refund'),
            new Transition('wait_to_reimburse', 'refund', 'reimburse'),
            new Transition('reimburse', 'reimburse', 'reimburse'),
        ];
    }

    /**
     * Guard a transition.
     *
     * @param \Symfony\Component\Workflow\Event\GuardEvent $event
     */
    public function guard(GuardEvent $event)
    {
        switch ($event->getTransition()->getName()) {
            case 'launch':
                $this->block($event, $this->permission(''));
                break;
            case 'wait_to_review':
                $this->block($event, $this->permission(''));
                break;
            case 'review':
                $this->block($event, $this->permission(''));
                break;
            case 'wait_to_refund':
                $this->block($event, $this->permission(''));
                break;
            case 'need_to_reject':
                $this->block($event, $this->permission(''));
                break;
            case 'reject':
                $this->block($event, $this->permission(''));
                break;
            case 'refund':
                $this->block($event, $this->permission(''));
                break;
            case 'wait_to_reimburse':
                $this->block($event, $this->permission(''));
                break;
            case 'reimburse':
                $this->block($event, $this->permission(''));
                break;
            default:
                $event->setBlocked(true);
        }
    }
}
