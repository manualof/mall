<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <heshudong@ibenchu.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-05-08 15:23
 */
namespace Notadd\Mall\Controllers\Api\Admin;

use Notadd\Foundation\Routing\Abstracts\Controller;
use Notadd\Mall\Handlers\Admin\Order\Refund\AskHandler;
use Notadd\Mall\Handlers\Admin\Order\Refund\ConfirmHandler;
use Notadd\Mall\Handlers\Admin\Order\Refund\FinishHandler;
use Notadd\Mall\Handlers\Admin\Order\Refund\ListHandler;
use Notadd\Mall\Handlers\Admin\Order\Refund\SendHandler;

/**
 * Class OrderRefundController.
 */
class OrderRefundController extends Controller
{
    /**
     * @param \Notadd\Mall\Handlers\Admin\Order\Refund\AskHandler $handler
     *
     * @return \Notadd\Foundation\Passport\Responses\ApiResponse|\Psr\Http\Message\ResponseInterface|\Zend\Diactoros\Response
     * @throws \Exception
     */
    public function ask(AskHandler $handler)
    {
        return $handler->toResponse()->generateHttpResponse();
    }

    /**
     * @param \Notadd\Mall\Handlers\Admin\Order\Refund\ConfirmHandler $handler
     *
     * @return \Notadd\Foundation\Passport\Responses\ApiResponse|\Psr\Http\Message\ResponseInterface|\Zend\Diactoros\Response
     * @throws \Exception
     */
    public function confirm(ConfirmHandler $handler)
    {
        return $handler->toResponse()->generateHttpResponse();
    }

    /**
     * @param \Notadd\Mall\Handlers\Admin\Order\Refund\FinishHandler $handler
     *
     * @return \Notadd\Foundation\Passport\Responses\ApiResponse|\Psr\Http\Message\ResponseInterface|\Zend\Diactoros\Response
     * @throws \Exception
     */
    public function finish(FinishHandler $handler)
    {
        return $handler->toResponse()->generateHttpResponse();
    }

    /**
     * @param \Notadd\Mall\Handlers\Admin\Order\Refund\ListHandler $handler
     *
     * @return \Notadd\Foundation\Passport\Responses\ApiResponse|\Psr\Http\Message\ResponseInterface|\Zend\Diactoros\Response
     * @throws \Exception
     */
    public function list(ListHandler $handler)
    {
        return $handler->toResponse()->generateHttpResponse();
    }

    /**
     * @param \Notadd\Mall\Handlers\Admin\Order\Refund\SendHandler $handler
     *
     * @return \Notadd\Foundation\Passport\Responses\ApiResponse|\Psr\Http\Message\ResponseInterface|\Zend\Diactoros\Response
     * @throws \Exception
     */
    public function send(SendHandler $handler)
    {
        return $handler->toResponse()->generateHttpResponse();
    }
}
