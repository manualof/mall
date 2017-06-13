<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <269044570@qq.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-06-01 16:04
 */
namespace Notadd\Mall\Entities;

use Notadd\Foundation\Flow\Abstracts\Entity;
use Symfony\Component\Workflow\Event\GuardEvent;
use Symfony\Component\Workflow\Transition;

/**
 * Class Store.
 */
class Store extends Entity
{
    /**
     * @return array
     */
    public function events()
    {
        return [];
    }

    /**
     * @return string
     */
    public function name()
    {
        return 'mall.store';
    }

    /**
     * @return array
     */
    public function places()
    {
        return [
            'register',
            'registered',
            'close',
            'closed',
            'open',
            'opened',
        ];
    }

    /**
     * @return array
     */
    public function transitions()
    {
        return [
            new Transition('register', 'register', 'registered'),
            new Transition('need_to_close', ['opened', 'registered'], 'close'),
            new Transition('close', 'close', 'closed'),
            new Transition('need_to_open', 'registered', 'open'),
            new Transition('open', 'open', 'opened'),
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
        switch ($event->getTransition()->getName()) {
            case 'register':
                $this->block($event, $this->permission(''));
                break;
            case 'need_to_close':
                $this->block($event, $this->permission(''));
                break;
            case 'close':
                $this->block($event, $this->permission(''));
                break;
            case 'need_to_open':
                $this->block($event, $this->permission(''));
                break;
            case 'open':
                $this->block($event, $this->permission(''));
                break;
            default:
                $event->setBlocked(true);
        }
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
