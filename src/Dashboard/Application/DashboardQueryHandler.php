<?php

namespace Baezeta\Admin\Dashboard\Application;

use Baezeta\Admin\Dashboard\Domain\Interfaces\AdminDashBoardRepositoryInterface;

class DashboardQueryHandler
{
    public function __construct(
        protected AdminDashBoardRepositoryInterface $repository,
    )
        {
    }

    public function run()
    {
        return $this->repository->getCollection();
    }

}
