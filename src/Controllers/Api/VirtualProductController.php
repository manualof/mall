<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <269044570@qq.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-04-26 14:32
 */
namespace Notadd\Mall\Controllers\Api;

use Notadd\Foundation\Routing\Abstracts\Controller;
use Notadd\Mall\Handlers\VirtualProduct\CreateHandler;
use Notadd\Mall\Handlers\VirtualProduct\EditHandler;
use Notadd\Mall\Handlers\VirtualProduct\ListHandler;
use Notadd\Mall\Handlers\VirtualProduct\RemoveHandler;
use Notadd\Mall\Handlers\VirtualProduct\RestoreHandler;

/**
 * Class VirtualProductController.
 */
class VirtualProductController extends Controller
{
    /**
     * @param \Notadd\Mall\Handlers\VirtualProduct\CreateHandler $handler
     *
     * @return \Notadd\Foundation\Passport\Responses\ApiResponse|\Psr\Http\Message\ResponseInterface|\Zend\Diactoros\Response
     * @throws \Exception
     */
    public function create(CreateHandler $handler)
    {
        return $handler->toResponse()->generateHttpResponse();
    }

    /**
     * @param \Notadd\Mall\Handlers\VirtualProduct\EditHandler $handler
     *
     * @return \Notadd\Foundation\Passport\Responses\ApiResponse|\Psr\Http\Message\ResponseInterface|\Zend\Diactoros\Response
     * @throws \Exception
     */
    public function edit(EditHandler $handler)
    {
        return $handler->toResponse()->generateHttpResponse();
    }

    /**
     * @param \Notadd\Mall\Handlers\VirtualProduct\ListHandler $handler
     *
     * @return \Notadd\Foundation\Passport\Responses\ApiResponse|\Psr\Http\Message\ResponseInterface|\Zend\Diactoros\Response
     * @throws \Exception
     */
    public function list(ListHandler $handler)
    {
        return $handler->toResponse()->generateHttpResponse();
    }

    /**
     * @param \Notadd\Mall\Handlers\VirtualProduct\RemoveHandler $handler
     *
     * @return \Notadd\Foundation\Passport\Responses\ApiResponse|\Psr\Http\Message\ResponseInterface|\Zend\Diactoros\Response
     * @throws \Exception
     */
    public function remove(RemoveHandler $handler)
    {
        return $handler->toResponse()->generateHttpResponse();
    }

    /**
     * @param \Notadd\Mall\Handlers\VirtualProduct\RestoreHandler $handler
     *
     * @return \Notadd\Foundation\Passport\Responses\ApiResponse|\Psr\Http\Message\ResponseInterface|\Zend\Diactoros\Response
     * @throws \Exception
     */
    public function restore(RestoreHandler $handler)
    {
        return $handler->toResponse()->generateHttpResponse();
    }
}
