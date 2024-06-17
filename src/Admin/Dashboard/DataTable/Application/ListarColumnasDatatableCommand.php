<?php

namespace Baezeta\Admin\Admin\Dashboard\DataTable\Application;

class ListarColumnasDatatableCommand
{
    public function __construct(
        public readonly string $nombreTabla,
    ) {
    }

}
