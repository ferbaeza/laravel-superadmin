<?php

namespace Baezeta\Admin\Dashboard\Main\Infrastructure\Web;

use Baezeta\Admin\Shared\Utils\ApiResponse;
use Baezeta\Admin\Shared\Bus\Domain\BusFacade;
use Baezeta\Admin\Shared\Laravel\Controller\BaseController;
use Baezeta\Admin\Dashboard\Main\Application\DashboardQuery;

class MainDashboardController extends BaseController
{
    /**
     * Dashboard
     * @return InfoDashboardEntity
     */
    public function index()
    {
        $response = BusFacade::process(new DashboardQuery());
        return ApiResponse::success('Dashboard', $response);
    }

}
