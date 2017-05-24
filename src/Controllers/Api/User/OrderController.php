<?php
/**
 * This file is part of Notadd.
 *
 * @author        TwilRoad <269044570@qq.com>
 * @copyright (c) 2017, notadd.com
 * @datetime      2017-05-24 11:22
 */
namespace Notadd\Mall\Controllers\Api\User;

use Notadd\Mall\Abstracts\UserController as AbstractUserController;
use Notadd\Mall\Handlers\User\Order\ListHandler;

/**
 * Class OrderController.
 */
class OrderController extends AbstractUserController
{
    /**
     * @param \Notadd\Mall\Handlers\User\Order\ListHandler $handler
     *
     * @return \Notadd\Foundation\Passport\Responses\ApiResponse|\Psr\Http\Message\ResponseInterface|\Zend\Diactoros\Response
     * @throws \Exception
     */
    public function list(ListHandler $handler)
    {
        return $handler->toResponse()->generateHttpResponse();
    }
}
