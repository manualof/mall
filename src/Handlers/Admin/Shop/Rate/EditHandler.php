<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <heshudong@ibenchu.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-05-08 15:56
 */
namespace Notadd\Mall\Handlers\Admin\Shop\Rate;

use Notadd\Foundation\Routing\Abstracts\Handler;
use Notadd\Mall\Models\ShopRate;

/**
 * Class EditHandler.
 */
class EditHandler extends Handler
{
    /**
     * Execute Handler.
     *
     * @throws \Exception
     */
    public function execute()
    {
        $id = $this->request->input('id');
        $rate = ShopRate::query()->find($id);
        if ($rate && $rate->update($this->request->all())) {
            $this->withCode(200)->withMessage('');
        } else {
            $this->withCode(500)->withError('');
        }
    }
}
