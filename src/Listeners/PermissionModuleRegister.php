<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <269044570@qq.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-05-26 19:15
 */
namespace Notadd\Mall\Listeners;

use Notadd\Foundation\Permission\Abstracts\PermissionModuleRegister as AbstractPermissionModuleRegister;

/**
 * Class PermissionModuleRegister.
 */
class PermissionModuleRegister extends AbstractPermissionModuleRegister
{
    /**
     * Handle Permission Register.
     */
    public function handle()
    {
        $this->manager->extend([
            'description'    => '商城权限。',
            'identification' => 'mall',
            'name'           => '商城',
        ]);
    }
}
