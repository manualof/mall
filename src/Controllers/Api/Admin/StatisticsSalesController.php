<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <269044570@qq.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-05-22 18:15
 */
namespace Notadd\Mall\Controllers\Api\Admin;

use Notadd\Foundation\Routing\Abstracts\Controller;
use Notadd\Mall\Handlers\Admin\Statistics\Sales\IncomeHandler;

/**
 * Class StatisticsSalesController.
 */
class StatisticsSalesController extends Controller
{
    /**
     * @param \Notadd\Mall\Handlers\Admin\Statistics\Sales\IncomeHandler $handler
     *
     * @return \Notadd\Foundation\Passport\Responses\ApiResponse|\Psr\Http\Message\ResponseInterface|\Zend\Diactoros\Response
     * @throws \Exception
     */
    public function income(IncomeHandler $handler)
    {
        return $handler->toResponse()->generateHttpResponse();
    }
}
