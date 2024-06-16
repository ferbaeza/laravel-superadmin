<?php

namespace Baezeta\Admin\Shared\DB\Domain\Interfaces;

use Illuminate\Support\Collection;
use Baezeta\Admin\Shared\DB\Domain\Collection\DBTablasAdminCollection;

interface DataBaseRepositoryInterfaces
{
    public function insert(string $sql, array $valores): bool;
    public function getDatabaseTables(): Collection;
    public function getDatabaseInformationColumnFromDB(string $tabla): Collection;
    public function getDataTable(string $table): array;
    public function getCollection(): DBTablasAdminCollection;
    public function sincronizarTablas(DBTablasAdminCollection $tablas): void;
}
