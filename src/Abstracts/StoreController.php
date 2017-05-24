<?php
/**
 * This file is part of Notadd.
 *
 * @author        TwilRoad <269044570@qq.com>
 * @copyright (c) 2017, notadd.com
 * @datetime      2017-05-24 10:40
 */
namespace Notadd\Mall\Abstracts;

use Notadd\Foundation\Routing\Abstracts\Controller;

/**
 * Class StoreController.
 */
abstract class StoreController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\View
     */
    protected function present()
    {
        return $this->view('');
    }
}
