<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <heshudong@ibenchu.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-05-09 15:08
 */
namespace Notadd\Mall\Models;

use Notadd\Foundation\Database\Model;
use Notadd\Foundation\Flow\Traits\HasFlow;
use Symfony\Component\Workflow\Event\GuardEvent;

/**
 * Class Shop.
 */
class Shop extends Model
{
    use HasFlow;

    /**
     * @var array
     */
    protected $fillable = [
        'address',
        'avatar',
        'category_id',
        'company',
        'end_at',
        'identification',
        'level',
        'location',
        'logo',
        'name',
        'open_at',
        'status',
    ];

    /**
     * @var string
     */
    protected $table = 'mall_shops';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function category()
    {
        return $this->hasOne(ShopCategory::class, 'id', 'category_id');
    }

    /**
     * Definition of name for flow.
     *
     * @return string
     */
    public function name()
    {
        // TODO: Implement name() method.
    }

    /**
     * Definition of places for flow.
     *
     * @return array
     */
    public function places()
    {
        // TODO: Implement places() method.
    }

    /**
     * Definition of transitions for flow.
     *
     * @return array
     */
    public function transitions()
    {
        // TODO: Implement transitions() method.
    }

    /**
     * Guard a transition.
     *
     * @param \Symfony\Component\Workflow\Event\GuardEvent $event
     */
    public function guardTransition(GuardEvent $event)
    {
        // TODO: Implement guardTransition() method.
    }
}
