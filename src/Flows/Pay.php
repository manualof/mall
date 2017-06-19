<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <269044570@qq.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-06-01 16:06
 */
namespace Notadd\Mall\Flows;

use Notadd\Foundation\Flow\Abstracts\Entity;
use Symfony\Component\Workflow\Event\GuardEvent;
use Symfony\Component\Workflow\Transition;

/**
 * Class Pay.
 */
class Pay extends Entity
{
    /**
     * @return string
     */
    public function name()
    {
        return 'mall.pay';
    }

    /**
     * @return array
     */
    public function places()
    {
        return [
            'launch',
            'launched',
            'pay',
            'payed',
            'cancel',
            'canceled',
        ];
    }

    /**
     * @return array
     */
    public function transitions()
    {
        return [
            new Transition('launch', 'launch', 'launched'),
            new Transition('wait_to_pay', 'launched', 'pay'),
            new Transition('pay', 'pay', 'payed'),
            new Transition('need_to_cancel', ['launched', 'payed'], 'cancel'),
            new Transition('cancel', 'cancel', 'canceled'),
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
            case 'wait_to_pay':
                $this->block($event, $this->permission(''));
                break;
            case 'pay':
                $this->block($event, $this->permission(''));
                break;
            case 'need_to_cancel':
                $this->block($event, $this->permission(''));
                break;
            case 'cancel':
                $this->block($event, $this->permission(''));
                break;
            default:
                $event->setBlocked(true);
        }
    }
}
