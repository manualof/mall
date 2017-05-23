<?php
/**
 * This file is part of Notadd.
 *
 * @author        TwilRoad <269044570@qq.com>
 * @copyright (c) 2017, notadd.com
 * @datetime      2017-05-23 20:03
 */
namespace Notadd\Mall\Controllers\Api\Seller;

use Notadd\Mall\Handlers\Seller\Product\Specifications\ListHandler;

/**
 * Class ProductSpecificationsController.
 */
class ProductSpecificationsController
{
    /**
     * @param \Notadd\Mall\Handlers\Seller\Product\Specifications\ListHandler $handler
     *
     * @return \Notadd\Foundation\Passport\Responses\ApiResponse|\Psr\Http\Message\ResponseInterface|\Zend\Diactoros\Response
     * @throws \Exception
     */
    public function list(ListHandler $handler)
    {
        return $handler->toResponse()->generateHttpResponse();
    }
}
