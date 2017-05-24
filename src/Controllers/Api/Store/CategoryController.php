<?php
/**
 * This file is part of Notadd.
 *
 * @author        TwilRoad <269044570@qq.com>
 * @copyright (c) 2017, notadd.com
 * @datetime      2017-05-24 10:36
 */
namespace Notadd\Mall\Controllers\Api\Store;

use Notadd\Mall\Abstracts\StoreController as AbstractStoreController;
use Notadd\Mall\Handlers\Store\Category\CategoryHandler;
use Notadd\Mall\Handlers\Store\Category\ListHandler;

/**
 * Class CategoryController.
 */
class CategoryController extends AbstractStoreController
{
    /**
     * @param \Notadd\Mall\Handlers\Store\Category\CategoryHandler $handler
     *
     * @return \Notadd\Foundation\Passport\Responses\ApiResponse|\Psr\Http\Message\ResponseInterface|\Zend\Diactoros\Response
     * @throws \Exception
     */
    public function category(CategoryHandler $handler)
    {
        return $handler->toResponse()->generateHttpResponse();
    }

    /**
     * @param \Notadd\Mall\Handlers\Store\Category\ListHandler $handler
     *
     * @return \Notadd\Foundation\Passport\Responses\ApiResponse|\Psr\Http\Message\ResponseInterface|\Zend\Diactoros\Response
     * @throws \Exception
     */
    public function list(ListHandler $handler)
    {
        return $handler->toResponse()->generateHttpResponse();
    }
}
