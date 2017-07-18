<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <heshudong@ibenchu.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-04-24 17:48
 */
namespace Notadd\Mall\Models;

use Notadd\Foundation\Database\Model;
use Notadd\Foundation\Database\Traits\HasFlow;
use Symfony\Component\Workflow\Event\GuardEvent;
use Symfony\Component\Workflow\Transition;

/**
 * Class Product.
 */
class Product extends Model
{
    use HasFlow;

    /**
     * @var array
     */
    protected $fillable = [
        'barcode',
        'brand_id',
        'business_item',
        'category_id',
        'description',
        'flow_marketing',
        'inventory',
        'inventory_warning',
        'library_id',
        'name',
        'price',
        'price_cost',
        'price_market',
        'store_id',
    ];

    /**
     * @var string
     */
    protected $table = 'mall_products';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function brand()
    {
        return $this->hasOne(ProductBrand::class, 'id', 'brand_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function category()
    {
        return $this->hasOne(ProductCategory::class, 'id', 'category_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pictures()
    {
        return $this->hasMany(ProductPicture::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function rates()
    {
        return $this->hasMany(ProductRate::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function specifications()
    {
        return $this->hasMany(ProductSpecification::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subscribes()
    {
        return $this->hasMany(ProductSubscribe::class);
    }

    /**
     * @param $value
     */
    public function setBrandIdAttribute($value)
    {
        $this->attributes['brand_id'] = is_null($value) ? 0 : $value;
    }

    /**
     * @param $value
     */
    public function setInventoryIdAttribute($value)
    {
        $this->attributes['inventory'] = is_null($value) ? 0 : $value;
    }

    /**
     * @param $value
     */
    public function setInventoryWarningIdAttribute($value)
    {
        $this->attributes['inventory_warning'] = is_null($value) ? 0 : $value;
    }

    /**
     * @param $value
     */
    public function setLibraryIdAttribute($value)
    {
        $this->attributes['library_id'] = is_null($value) ? 0 : $value;
    }

    /**
     * @param $value
     */
    public function setPriceAttribute($value)
    {
        $this->attributes['price'] = is_null($value) ? 0.00 : $value;
    }

    /**
     * @param $value
     */
    public function setPriceCostAttribute($value)
    {
        $this->attributes['price_cost'] = is_null($value) ? 0.00 : $value;
    }

    /**
     * @param $value
     */
    public function setPriceMarketAttribute($value)
    {
        $this->attributes['price_market'] = is_null($value) ? 0.00 : $value;
    }

    /**
     * @param $value
     */
    public function setStoreIdAttribute($value)
    {
        $this->attributes['store_id'] = is_null($value) ? 0 : $value;
    }

    /**
     * Definition of name for flow.
     *
     * @return string
     */
    public function name()
    {
        return 'mall.product';
    }

    /**
     * Definition of places for flow.
     *
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
     * Definition of transitions for flow.
     *
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
    public function guardTransition(GuardEvent $event)
    {
        switch ($event->getTransition()->getName()) {
            case 'create':
                $this->blockTransition($event, $this->permission(''));
                break;
            case 'need_to_edit':
                $this->blockTransition($event, $this->permission(''));
                break;
            case 'edit':
                $this->blockTransition($event, $this->permission(''));
                break;
            case 'need_to_remove':
                $this->blockTransition($event, $this->permission(''));
                break;
            case 'remove':
                $this->blockTransition($event, $this->permission(''));
                break;
            case 'need_to_publish':
                $this->blockTransition($event, $this->permission(''));
                break;
            case 'publish':
                $this->blockTransition($event, $this->permission(''));
                break;
            default:
                $event->setBlocked(true);
        }
    }
}
