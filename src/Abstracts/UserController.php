<?php
/**
 * This file is part of Notadd.
 *
 * @author        TwilRoad <heshudong@ibenchu.com>
 * @copyright (c) 2017, notadd.com
 * @datetime      2017-05-24 10:39
 */
namespace Notadd\Mall\Abstracts;

use Notadd\Foundation\Routing\Abstracts\Controller;

/**
 * Class UserController.
 */
abstract class UserController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\View
     */
    protected function present()
    {
        return $this->view('');
    }
}
