<?php
/**
 * This file is part of Notadd.
 *
 * @author        TwilRoad <269044570@qq.com>
 * @copyright (c) 2017, notadd.com
 * @datetime      2017-05-24 13:28
 */
namespace Notadd\Mall\Controllers\Api\User;

use Notadd\Mall\Abstracts\UserController as AbstractUserController;
use Notadd\Mall\Handlers\User\Card\AddHandler;

/**
 * Class CardController.
 */
class CardController extends AbstractUserController
{
    /**
     * @param \Notadd\Mall\Handlers\User\Card\AddHandler $handler
     *
     * @return \Notadd\Foundation\Passport\Responses\ApiResponse|\Psr\Http\Message\ResponseInterface|\Zend\Diactoros\Response
     * @throws \Exception
     */
    public function add(AddHandler $handler)
    {
        return $handler->toResponse()->generateHttpResponse();
    }
}
