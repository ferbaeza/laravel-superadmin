<?php

namespace Baezeta\Admin\Admin\Dashboard\DataTable\Infrastructure\Web;


use Baezeta\Admin\Shared\Utils\ApiResponse;
use Baezeta\Admin\Shared\Bus\Domain\BusFacade;
use Baezeta\Admin\Shared\Laravel\Controller\BaseController;
use Baezeta\Admin\Admin\Dashboard\DataTable\Application\DatatableInfoCommand;

class DataTableController extends BaseController
{

    /**
     * Crear Menu Dashboard
     * @return AdminMenuDashboardEntity
     */
    public function datatable(string $nombreTabla)
    {
        $response = BusFacade::process(new DatatableInfoCommand($nombreTabla));
        return ApiResponse::success('DatatableInfoCommand', $response);
    }
}
