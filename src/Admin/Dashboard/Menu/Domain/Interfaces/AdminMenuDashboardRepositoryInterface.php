<?php

namespace Baezeta\Admin\Admin\Dashboard\Menu\Domain\Interfaces;

use Baezeta\Admin\Admin\Dashboard\Menu\Domain\Entity\AdminMenuEntity;
use Baezeta\Admin\Admin\Dashboard\Menu\Domain\Entity\CodigoMenuEntity;

interface AdminMenuDashboardRepositoryInterface
{
    public function exist(string $codigoPadre): bool;
    public function getEntityByCodigoPadre(string $codigoPadre): CodigoMenuEntity;
    public function save(AdminMenuEntity $menu): void ;

}
