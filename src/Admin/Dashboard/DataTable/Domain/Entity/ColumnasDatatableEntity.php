<?php

namespace Baezeta\Admin\Admin\Dashboard\DataTable\Domain\Entity;

use Baezeta\Admin\Shared\Entity\EntityBase;

class ColumnasDatatableEntity extends EntityBase
{
    public function __construct(
        public readonly string $field,
        public readonly string $headerName,
        public readonly string $width,

    ) {
    }
}
