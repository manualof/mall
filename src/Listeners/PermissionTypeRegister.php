<?php
/**
 * This file is part of Notadd.
 *
 * @author        TwilRoad <heshudong@ibenchu.com>
 * @copyright (c) 2017, notadd.com
 * @datetime      2017-05-25 18:36
 */
namespace Notadd\Mall\Listeners;

use Notadd\Foundation\Permission\Abstracts\PermissionTypeRegister as AbstractPermissionTypeRegister;

/**
 * Class PermissionTypeRegister.
 */
class PermissionTypeRegister extends AbstractPermissionTypeRegister
{
    /**
     * Handle Permission Register.
     */
    public function handle()
    {
        $this->manager->extend([
            'description' => '商家权限。',
            'identification' => 'seller',
            'name' => '商家',
        ]);
    }
}
