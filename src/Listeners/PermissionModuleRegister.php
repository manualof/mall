<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <heshudong@ibenchu.com>
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
            'description'    => '商城后台权限',
            'identification' => 'mall-administration',
            'name'           => '商城后台',
        ]);
        $this->manager->extend([
            'description'    => '商城商家权限',
            'identification' => 'mall-seller',
            'name'           => '商城商家',
        ]);
        $this->manager->extend([
            'description'    => '商城用户权限',
            'identification' => 'mall-user',
            'name'           => '商城用户',
        ]);
    }
}
