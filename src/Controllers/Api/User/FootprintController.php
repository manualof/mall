<?php
/**
 * This file is part of Notadd.
 *
 * @author        TwilRoad <heshudong@ibenchu.com>
 * @copyright (c) 2017, notadd.com
 * @datetime      2017-05-24 17:39
 */
namespace Notadd\Mall\Controllers\Api\User;

use Notadd\Foundation\Routing\Abstracts\Controller;
use Notadd\Mall\Handlers\User\Footprint\ListHandler;
use Notadd\Mall\Handlers\User\Footprint\RemoveHandler;

/**
 * Class FootprintController.
 */
class FootprintController extends Controller
{
    /**
     * @param \Notadd\Mall\Handlers\User\Footprint\ListHandler $handler
     *
     * @return \Notadd\Foundation\Passport\Responses\ApiResponse|\Psr\Http\Message\ResponseInterface|\Zend\Diactoros\Response
     * @throws \Exception
     */
    public function list(ListHandler $handler)
    {
        return $handler->toResponse()->generateHttpResponse();
    }

    /**
     * @param \Notadd\Mall\Handlers\User\Footprint\RemoveHandler $handler
     *
     * @return \Notadd\Foundation\Passport\Responses\ApiResponse|\Psr\Http\Message\ResponseInterface|\Zend\Diactoros\Response
     * @throws \Exception
     */
    public function remove(RemoveHandler $handler)
    {
        return $handler->toResponse()->generateHttpResponse();
    }
}
