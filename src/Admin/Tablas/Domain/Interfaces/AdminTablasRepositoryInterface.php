<?php

namespace Baezeta\Admin\Admin\Tablas\Domain\Interfaces;

use Baezeta\Admin\Admin\Tablas\Domain\Collection\TablasAdminCollection;

interface AdminTablasRepositoryInterface
{
    public function getEntity(string $idTabla);
    public function getCollection(): TablasAdminCollection;
}
