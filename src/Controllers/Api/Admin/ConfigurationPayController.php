<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <heshudong@ibenchu.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-05-03 16:07
 */
namespace Notadd\Mall\Controllers\Api\Admin;

use Notadd\Foundation\Routing\Abstracts\Controller;
use Notadd\Mall\Handlers\Admin\Configuration\Pay\GetHandler;
use Notadd\Mall\Handlers\Admin\Configuration\Pay\SetHandler;

/**
 * Class ConfigurationPayController.
 */
class ConfigurationPayController extends Controller
{
    /**
     * @param \Notadd\Mall\Handlers\Admin\Configuration\Pay\GetHandler $handler
     *
     * @return \Notadd\Foundation\Passport\Responses\ApiResponse|\Psr\Http\Message\ResponseInterface|\Zend\Diactoros\Response
     * @throws \Exception
     */
    public function get(GetHandler $handler)
    {
        return $handler->toResponse()->generateHttpResponse();
    }

    /**
     * @param \Notadd\Mall\Handlers\Admin\Configuration\Pay\SetHandler $handler
     *
     * @return \Notadd\Foundation\Passport\Responses\ApiResponse|\Psr\Http\Message\ResponseInterface|\Zend\Diactoros\Response
     * @throws \Exception
     */
    public function set(SetHandler $handler)
    {
        return $handler->toResponse()->generateHttpResponse();
    }
}
