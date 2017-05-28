<?php
/**
 * This file is part of Notadd.
 *
 * @author        TwilRoad <heshudong@ibenchu.com>
 * @copyright (c) 2017, notadd.com
 * @datetime      2017-05-24 11:23
 */
namespace Notadd\Mall\Controllers\Api\Store;

use Notadd\Mall\Abstracts\StoreController as AbstractStoreController;
use Notadd\Mall\Handlers\Store\ListHandler;
use Notadd\Mall\Handlers\Store\StoreHandler;

/**
 * Class StoreController.
 */
class StoreController extends AbstractStoreController
{
    /**
     * @param \Notadd\Mall\Handlers\Store\ListHandler $handler
     *
     * @return \Notadd\Foundation\Passport\Responses\ApiResponse|\Psr\Http\Message\ResponseInterface|\Zend\Diactoros\Response
     * @throws \Exception
     */
    public function list(ListHandler $handler)
    {
        return $handler->toResponse()->generateHttpResponse();
    }

    /**
     * @param \Notadd\Mall\Handlers\Store\StoreHandler $handler
     *
     * @return \Notadd\Foundation\Passport\Responses\ApiResponse|\Psr\Http\Message\ResponseInterface|\Zend\Diactoros\Response
     * @throws \Exception
     */
    public function store(StoreHandler $handler)
    {
        return $handler->toResponse()->generateHttpResponse();
    }
}
