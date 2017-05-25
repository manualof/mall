<?php
/**
 * This file is part of Notadd.
 *
 * @author        TwilRoad <269044570@qq.com>
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
     * Handle Permission Registrar.
     */
    public function handle()
    {
        $this->manager->extend('mall', [
            'description' => '商城权限。',
            'identification' => 'global',
            'name' => '商城',
        ]);
    }
}
