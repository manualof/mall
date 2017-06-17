<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <269044570@qq.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-06-01 18:11
 */
namespace Notadd\Mall\Flows;

use Notadd\Foundation\Flow\Abstracts\Entity;
use Symfony\Component\Workflow\Event\GuardEvent;
use Symfony\Component\Workflow\Transition;

/**
 * Class OrderExpress.
 */
class OrderExpress extends Entity
{
    /**
     * @return string
     */
    public function name()
    {
        return 'mall.order.express';
    }

    /**
     * @return array
     */
    public function places()
    {
        return [
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
