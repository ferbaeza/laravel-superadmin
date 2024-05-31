<?php

namespace Baezeta\Admin\Shared\DB\Infrastructure\Datasource;

use Illuminate\Support\Facades\DB;
use Baezeta\Admin\Shared\DB\Domain\Interfaces\DataBaseRepositoryInterfaces;

class DataBaseRepository implements DataBaseRepositoryInterfaces
{
    public function getDatabaseTables(): array
    {
        $tablesSQL = DB::select("
            SELECT table_name
            FROM information_schema.tables
            WHERE table_schema = 'public'
            AND table_type = 'BASE TABLE'
        ");
        return $tablesSQL;
    }

    public function getDataTable(string $table): array
    {
        $dataSQL = DB::select("SELECT * FROM $table");
        return $dataSQL;
    }
}
