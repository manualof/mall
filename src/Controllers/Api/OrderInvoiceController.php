<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <269044570@qq.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-05-08 17:53
 */
namespace Notadd\Mall\Controllers\Api;

use Notadd\Foundation\Routing\Abstracts\Controller;
use Notadd\Mall\Handlers\Order\Invoice\CreateHandler;
use Notadd\Mall\Handlers\Order\Invoice\EditHandler;
use Notadd\Mall\Handlers\Order\Invoice\InvoiceHandler;
use Notadd\Mall\Handlers\Order\Invoice\ListHandler;
use Notadd\Mall\Handlers\Order\Invoice\RemoveHandler;

/**
 * Class OrderInvoiceController.
 */
class OrderInvoiceController extends Controller
{
    /**
     * @param \Notadd\Mall\Handlers\Order\Invoice\CreateHandler $handler
     *
     * @return \Notadd\Foundation\Passport\Responses\ApiResponse|\Psr\Http\Message\ResponseInterface|\Zend\Diactoros\Response
     * @throws \Exception
     */
    public function create(CreateHandler $handler)
    {
        return $handler->toResponse()->generateHttpResponse();
    }

    /**
     * @param \Notadd\Mall\Handlers\Order\Invoice\EditHandler $handler
     *
     * @return \Notadd\Foundation\Passport\Responses\ApiResponse|\Psr\Http\Message\ResponseInterface|\Zend\Diactoros\Response
     * @throws \Exception
     */
    public function edit(EditHandler $handler)
    {
        return $handler->toResponse()->generateHttpResponse();
    }

    /**
     * @param \Notadd\Mall\Handlers\Order\Invoice\InvoiceHandler $handler
     *
     * @return \Notadd\Foundation\Passport\Responses\ApiResponse|\Psr\Http\Message\ResponseInterface|\Zend\Diactoros\Response
     * @throws \Exception
     */
    public function invoice(InvoiceHandler $handler)
    {
        return $handler->toResponse()->generateHttpResponse();
    }

    /**
     * @param \Notadd\Mall\Handlers\Order\Invoice\ListHandler $handler
     *
     * @return \Notadd\Foundation\Passport\Responses\ApiResponse|\Psr\Http\Message\ResponseInterface|\Zend\Diactoros\Response
     * @throws \Exception
     */
    public function list(ListHandler $handler)
    {
        return $handler->toResponse()->generateHttpResponse();
    }

    /**
     * @param \Notadd\Mall\Handlers\Order\Invoice\RemoveHandler $handler
     *
     * @return \Notadd\Foundation\Passport\Responses\ApiResponse|\Psr\Http\Message\ResponseInterface|\Zend\Diactoros\Response
     * @throws \Exception
     */
    public function remove(RemoveHandler $handler)
    {
        return $handler->toResponse()->generateHttpResponse();
    }
}
