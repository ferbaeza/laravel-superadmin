<?php

namespace Baezeta\Admin\Shared\DB\Infrastructure\Facade;

use Illuminate\Support\Collection;
use Baezeta\Admin\Shared\DB\Infrastructure\Datasource\DataBaseRepository;

class Database
{

    protected DataBaseRepository $repository;

    public static function repo()
    {
        return new DataBaseRepository();
    }

    public static function getDatabaseTables(): Collection
    {
        return self::repo()->getDatabaseTables();
    }

    static function getDataTable(string $table): mixed
    {
        return self::repo()->getDataTable($table);
    }

}
