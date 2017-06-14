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
 * Class Express.
 */
class Express extends Entity
{
    /**
     * @return string
     */
    public function name()
    {
        return 'mall.express';
    }

    /**
     * @return array
     */
    public function places()
    {
        return [
            'pay',     // 支付
            'payed',   // 支付完成
            'send',    // 发货
            'sent',    // 发货完成
            'take',    // 收货
            'took',    // 收货完成
        ];
    }

    /**
     * @return array
     */
    public function transitions()
    {
        return [
            new Transition('pay', 'pay', 'payed'),
            new Transition('wait_to_send', 'payed', 'send'),
            new Transition('send', 'send', 'sent'),
            new Transition('wait_to_take', 'sent', 'take'),
            new Transition('take', 'take', 'took'),
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
            case 'pay':
                $this->block($event, $this->permission(''));
                break;
            case 'wait_to_send':
                $this->block($event, $this->permission(''));
                break;
            case 'send':
                $this->block($event, $this->permission(''));
                break;
            case 'wait_to_take':
                $this->block($event, $this->permission(''));
                break;
            case 'take':
                $this->block($event, $this->permission(''));
                break;
            default:
                $event->setBlocked(true);
        }
    }
}