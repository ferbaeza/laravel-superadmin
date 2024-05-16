<?php

namespace Baezeta\Admin\Dashboard\Infrastructure\Web;

use App\Http\Controllers\Controller;
use Baezeta\Admin\Shared\Utils\ApiResponse;
use Baezeta\Admin\Dashboard\Application\DashboardQueryHandler;

class DashboardController extends Controller
{
    public function __construct(
        protected DashboardQueryHandler $handler,
    )
        {
    }
    public function index()
    {
        $data = $this->handler->run();
        return ApiResponse::json('Dashboard', $data);
    }

}
