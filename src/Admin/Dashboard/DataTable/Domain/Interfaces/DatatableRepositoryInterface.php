<?php

namespace Baezeta\Admin\Admin\Dashboard\DataTable\Domain\Interfaces;

use Baezeta\Admin\Admin\Dashboard\DataTable\Domain\Collection\DatosDatatableCollection;
use Baezeta\Admin\Admin\Dashboard\DataTable\Domain\Collection\ColumnasDatatableCollection;

interface DatatableRepositoryInterface
{
    public function getColumnasCollection(string $nombreTabla): ColumnasDatatableCollection;
    public function getDataCollection(string $nombreTabla): DatosDatatableCollection;


}
