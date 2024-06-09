<?php

namespace Baezeta\Admin\Admin\Tablas\Domain\Interfaces;

use Baezeta\Admin\Admin\Tablas\Domain\Entity\TablaAdminEntity;
use Baezeta\Admin\Admin\Tablas\Domain\Collection\TablasAdminCollection;

interface AdminTablasRepositoryInterface
{
    public function getEntity(string $idTabla): TablaAdminEntity;
    public function getCollection(): TablasAdminCollection;
}
