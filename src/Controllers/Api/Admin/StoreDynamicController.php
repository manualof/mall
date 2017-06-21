<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <heshudong@ibenchu.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-05-09 12:16
 */
namespace Notadd\Mall\Controllers\Api\Admin;

use Notadd\Foundation\Routing\Abstracts\Controller;
use Notadd\Mall\Handlers\Admin\Store\Dynamic\CreateHandler;
use Notadd\Mall\Handlers\Admin\Store\Dynamic\DynamicHandler;
use Notadd\Mall\Handlers\Admin\Store\Dynamic\EditHandler;
use Notadd\Mall\Handlers\Admin\Store\Dynamic\ListHandler;
use Notadd\Mall\Handlers\Admin\Store\Dynamic\RemoveHandler;

/**
 * Class ShopDynamicController.
 */
class StoreDynamicController extends Controller
{
    /**
     * @param \Notadd\Mall\Handlers\Admin\Store\Dynamic\CreateHandler $handler
     *
     * @return \Notadd\Foundation\Passport\Responses\ApiResponse|\Psr\Http\Message\ResponseInterface|\Zend\Diactoros\Response
     * @throws \Exception
     */
    public function create(CreateHandler $handler)
    {
        return $handler->toResponse()->generateHttpResponse();
    }

    /**
     * @param \Notadd\Mall\Handlers\Admin\Store\Dynamic\DynamicHandler $handler
     *
     * @return \Notadd\Foundation\Passport\Responses\ApiResponse|\Psr\Http\Message\ResponseInterface|\Zend\Diactoros\Response
     * @throws \Exception
     */
    public function dynamic(DynamicHandler $handler)
    {
        return $handler->toResponse()->generateHttpResponse();
    }

    /**
     * @param \Notadd\Mall\Handlers\Admin\Store\Dynamic\EditHandler $handler
     *
     * @return \Notadd\Foundation\Passport\Responses\ApiResponse|\Psr\Http\Message\ResponseInterface|\Zend\Diactoros\Response
     * @throws \Exception
     */
    public function edit(EditHandler $handler)
    {
        return $handler->toResponse()->generateHttpResponse();
    }

    /**
     * @param \Notadd\Mall\Handlers\Admin\Store\Dynamic\ListHandler $handler
     *
     * @return \Notadd\Foundation\Passport\Responses\ApiResponse|\Psr\Http\Message\ResponseInterface|\Zend\Diactoros\Response
     * @throws \Exception
     */
    public function list(ListHandler $handler)
    {
        return $handler->toResponse()->generateHttpResponse();
    }

    /**
     * @param \Notadd\Mall\Handlers\Admin\Store\Dynamic\RemoveHandler $handler
     *
     * @return \Notadd\Foundation\Passport\Responses\ApiResponse|\Psr\Http\Message\ResponseInterface|\Zend\Diactoros\Response
     * @throws \Exception
     */
    public function remove(RemoveHandler $handler)
    {
        return $handler->toResponse()->generateHttpResponse();
    }
}
