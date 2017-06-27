<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <269044570@qq.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-06-27 17:15
 */
namespace Notadd\Mall\Controllers\Api\Seller;

use Notadd\Foundation\Routing\Abstracts\Controller;
use Notadd\Mall\Handlers\Seller\Store\Supplier\CreateHandler;
use Notadd\Mall\Handlers\Seller\Store\Supplier\EditHandler;
use Notadd\Mall\Handlers\Seller\Store\Supplier\SupplierHandler;

/**
 * Class StoreSupplierController.
 */
class StoreSupplierController extends Controller
{
    /**
     * @param \Notadd\Mall\Handlers\Seller\Store\Supplier\CreateHandler $handler
     *
     * @return \Notadd\Foundation\Passport\Responses\ApiResponse|\Psr\Http\Message\ResponseInterface|\Zend\Diactoros\Response
     * @throws \Exception
     */
    public function create(CreateHandler $handler)
    {
        return $handler->toResponse()->generateHttpResponse();
    }

    /**
     * @param \Notadd\Mall\Handlers\Seller\Store\Supplier\EditHandler $handler
     *
     * @return \Notadd\Foundation\Passport\Responses\ApiResponse|\Psr\Http\Message\ResponseInterface|\Zend\Diactoros\Response
     * @throws \Exception
     */
    public function edit(EditHandler $handler)
    {
        return $handler->toResponse()->generateHttpResponse();
    }

    /**
     * @param \Notadd\Mall\Handlers\Seller\Store\Supplier\SupplierHandler $handler
     *
     * @return \Notadd\Foundation\Passport\Responses\ApiResponse|\Psr\Http\Message\ResponseInterface|\Zend\Diactoros\Response
     * @throws \Exception
     */
    public function supplier(SupplierHandler $handler)
    {
        return $handler->toResponse()->generateHttpResponse();
    }
}
