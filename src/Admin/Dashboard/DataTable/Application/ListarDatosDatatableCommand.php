<?php

namespace Baezeta\Admin\Admin\Dashboard\DataTable\Application;

class ListarDatosDatatableCommand
{
    public function __construct(
        public readonly string $nombreTabla,
    ) {
    }

}
