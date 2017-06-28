<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <heshudong@ibenchu.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-05-08 15:40
 */
namespace Notadd\Mall\Handlers\Administration\Order\Rate;

use Notadd\Foundation\Routing\Abstracts\Handler;
use Notadd\Mall\Models\ProductRate;

/**
 * Class RateHandler.
 */
class RateHandler extends Handler
{
    /**
     * Execute Handler.
     *
     * @throws \Exception
     */
    public function execute()
    {
        $id = $this->request->input('id');
        if (ProductRate::query()->where('id', $id)->count()) {
            $this->withCode(200)->withData(ProductRate::query()->find($id))->withMessage('');
        } else {
            $this->withCode(500)->withMessage('');
        }
    }
}
