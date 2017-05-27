<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <269044570@qq.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-05-26 11:02
 */
namespace Notadd\Mall\Listeners;

use Notadd\Foundation\Permission\Abstracts\PermissionGroupRegister as AbstractPermissionGroupRegister;

/**
 * Class PermissionGroupRegister.
 */
class PermissionGroupRegister extends AbstractPermissionGroupRegister
{
    /**
     * Handle Permission Register.
     */
    public function handle()
    {
        $this->manager->extend([
            'description'    => '全局权限定义。',
            'identification' => 'global',
            'module'         => 'mall',
            'name'           => '全局权限',
        ]);
        $this->manager->extend([
            'description'    => '商品权限定义。',
            'identification' => 'product',
            'module'         => 'mall',
            'name'           => '商品权限',
        ]);
        $this->manager->extend([
            'description'    => '商店权限定义。',
            'identification' => 'store',
            'module'         => 'mall',
            'name'           => '商店权限',
        ]);
        $this->manager->extend([
            'description'    => '商家权限定义。',
            'identification' => 'seller',
            'module'         => 'mall',
            'name'           => '商家权限',
        ]);
    }
}
