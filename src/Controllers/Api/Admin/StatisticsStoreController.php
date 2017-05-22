<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <269044570@qq.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-05-22 18:07
 */
namespace Notadd\Mall\Controllers\Api\Admin;

use Notadd\Foundation\Routing\Abstracts\Controller;
use Notadd\Mall\Handlers\Admin\Statistics\Store\NewlyHandler;
use Notadd\Mall\Handlers\Admin\Statistics\Store\SalesHandler;

/**
 * Class StatisticsStoreController.
 */
class StatisticsStoreController extends Controller
{
    /**
     * @param \Notadd\Mall\Handlers\Admin\Statistics\Store\NewlyHandler $handler
     *
     * @return \Notadd\Foundation\Passport\Responses\ApiResponse|\Psr\Http\Message\ResponseInterface|\Zend\Diactoros\Response
     * @throws \Exception
     */
    public function newly(NewlyHandler $handler)
    {
        return $handler->toResponse()->generateHttpResponse();
    }

    /**
     * @param \Notadd\Mall\Handlers\Admin\Statistics\Store\SalesHandler $handler
     *
     * @return \Notadd\Foundation\Passport\Responses\ApiResponse|\Psr\Http\Message\ResponseInterface|\Zend\Diactoros\Response
     * @throws \Exception
     */
    public function sales(SalesHandler $handler)
    {
        return $handler->toResponse()->generateHttpResponse();
    }
}
