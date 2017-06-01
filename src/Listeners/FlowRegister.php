<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <269044570@qq.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-05-31 20:44
 */
namespace Notadd\Mall\Listeners;

use Notadd\Foundation\Flow\Abstracts\FlowRegister as AbstractFlowRegister;
use Notadd\Foundation\Flow\Flow;
use Notadd\Mall\Entities\Product;
use Symfony\Component\Workflow\DefinitionBuilder;
use Symfony\Component\Workflow\MarkingStore\SingleStateMarkingStore;
use Symfony\Component\Workflow\Transition;

/**
 * Class FlowRegister.
 */
class FlowRegister extends AbstractFlowRegister
{
    /**
     * @var array
     */
    protected $definitions = [
        'product',
    ];

    /**
     * Register flow or flows.
     */
    public function handle()
    {
        foreach ($this->definitions as $definition) {
            if (method_exists($this, 'register' . ucfirst($definition) . 'Flow')) {
                $this->{'register' . ucfirst($definition) . 'Flow'}();
            }
        }
    }

    /**
     * Register Product Flow.
     *
     * @throws \Exception
     */
    protected function registerProductFlow() {
        $definition = new DefinitionBuilder();
        $definition->addPlaces(['draft', 'review', 'rejected', 'published']);
        $definition->addTransition(new Transition('to_review', 'draft', 'review'));
        $definition->addTransition(new Transition('publish', 'review', 'published'));
        $definition->addTransition(new Transition('reject', 'review', 'rejected'));
        $marking = new SingleStateMarkingStore('currentState');
        $workflow = new Flow($definition->build(), $marking, 'product');
        $this->flow->add($workflow, Product::class);
    }
}
