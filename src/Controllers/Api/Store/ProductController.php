<?php
/**
 * This file is part of Notadd.
 *
 * @author        TwilRoad <269044570@qq.com>
 * @copyright (c) 2017, notadd.com
 * @datetime      2017-05-24 10:40
 */
namespace Notadd\Mall\Controllers\Api\Store;

use Notadd\Mall\Abstracts\StoreController as AbstractStoreController;
use Notadd\Mall\Handlers\Store\Product\ProductHandler;

/**
 * Class ProductController.
 */
class ProductController extends AbstractStoreController
{
    /**
     * @param \Notadd\Mall\Handlers\Store\Product\ProductHandler $handler
     *
     * @return \Notadd\Foundation\Passport\Responses\ApiResponse|\Psr\Http\Message\ResponseInterface|\Zend\Diactoros\Response
     * @throws \Exception
     */
    public function product(ProductHandler $handler)
    {
        return $handler->toResponse()->generateHttpResponse();
    }
}
