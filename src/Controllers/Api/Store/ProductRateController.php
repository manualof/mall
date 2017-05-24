<?php
/**
 * This file is part of Notadd.
 *
 * @author        TwilRoad <269044570@qq.com>
 * @copyright (c) 2017, notadd.com
 * @datetime      2017-05-24 17:11
 */
namespace Notadd\Mall\Controllers\Api\Store;

use Notadd\Foundation\Routing\Abstracts\Controller;
use Notadd\Mall\Handlers\Store\Product\Rate\ListHandler;

/**
 * Class ProductRateController.
 */
class ProductRateController extends Controller
{
    /**
     * @param \Notadd\Mall\Handlers\Store\Product\Rate\ListHandler $handler
     *
     * @return \Notadd\Foundation\Passport\Responses\ApiResponse|\Psr\Http\Message\ResponseInterface|\Zend\Diactoros\Response
     * @throws \Exception
     */
    public function list(ListHandler $handler)
    {
        return $handler->toResponse()->generateHttpResponse();
    }
}
