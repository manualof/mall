<?php
/**
 * This file is part of Notadd.
 *
 * @author        TwilRoad <heshudong@ibenchu.com>
 * @copyright (c) 2017, notadd.com
 * @datetime      2017-05-25 12:36
 */
namespace Notadd\Mall\Controllers;

use Notadd\Foundation\Routing\Abstracts\Controller;

/**
 * Class UserController.
 */
class UserController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\View
     */
    public function handle()
    {
        return $this->view('');
    }
}
