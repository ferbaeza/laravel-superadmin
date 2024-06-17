<?php

namespace Baezeta\Admin\Admin\Dashboard\DataTable\Application;

class DatatableInfoCommand
{
    public function __construct(
        public readonly string $nombreTabla,
    )
        {
    }

}
