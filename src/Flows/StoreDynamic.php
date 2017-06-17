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
 * Class StoreDynamic.
 */
class StoreDynamic extends Entity
{
    /**
     * @return string
     */
    public function name()
    {
        return 'mall.store.dynamic';
    }

    /**
     * @return array
     */
    public function places()
    {
        return [
            'create',
            'created',
            'edit',
            'edited',
            'remove',
            'removed',
            'publish',
            'published',
        ];
    }

    /**
     * @return array
     */
    public function transitions()
    {
        return [
            new Transition('create', 'create', 'created'),
            new Transition('need_to_edit', 'created', 'edit'),
            new Transition('edit', 'edit', 'edited'),
            new Transition('need_to_remove', ['created', 'edited'], 'remove'),
            new Transition('remove', 'remove', 'removed'),
            new Transition('need_to_publish', ['created', 'edited'], 'publish'),
            new Transition('publish', 'publish', 'published'),
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
            case 'create':
                $this->block($event, $this->permission(''));
                break;
            case 'need_to_edit':
                $this->block($event, $this->permission(''));
                break;
            case 'edit':
                $this->block($event, $this->permission(''));
                break;
            case 'need_to_remove':
                $this->block($event, $this->permission(''));
                break;
            case 'remove':
                $this->block($event, $this->permission(''));
                break;
            case 'need_to_publish':
                $this->block($event, $this->permission(''));
                break;
            case 'publish':
                $this->block($event, $this->permission(''));
                break;
            default:
                $event->setBlocked(true);
        }
    }
}
