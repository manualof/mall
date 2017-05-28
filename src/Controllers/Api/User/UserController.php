<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <heshudong@ibenchu.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-05-20 17:10
 */
namespace Notadd\Mall\Controllers\Api\User;

use Notadd\Mall\Abstracts\UserController as AbstractUserController;
use Notadd\Mall\Handlers\User\UserHandler;

/**
 * Class UserController.
 */
class UserController extends AbstractUserController
{
    /**
     * @param \Notadd\Mall\Handlers\User\UserHandler $handler
     *
     * @return \Notadd\Foundation\Passport\Responses\ApiResponse|\Psr\Http\Message\ResponseInterface|\Zend\Diactoros\Response
     * @throws \Exception
     */
    public function user(UserHandler $handler)
    {
        return $handler->toResponse()->generateHttpResponse();
    }
}
