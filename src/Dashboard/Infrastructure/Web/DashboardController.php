<?php

namespace Baezeta\Admin\Dashboard\Infrastructure\Web;

use Baezeta\Admin\Shared\Bus\BusFacade;
use Baezeta\Admin\Shared\Utils\ApiResponse;
use Baezeta\Admin\Dashboard\Application\DashboardQuery;
use Baezeta\Admin\Shared\Laravel\Controller\BaseController;

class DashboardController extends BaseController
{
    public function index()
    {
        $response = BusFacade::process(new DashboardQuery());
        return ApiResponse::success('Dashboard', $response);
    }

}
