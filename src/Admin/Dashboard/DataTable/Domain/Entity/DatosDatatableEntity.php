<?php

namespace Baezeta\Admin\Admin\Dashboard\DataTable\Domain\Entity;

use Baezeta\Admin\Shared\Entity\EntityBase;
use JsonSerializable;
use stdClass;

class DatosDatatableEntity extends EntityBase implements JsonSerializable
{
    public function __construct(
        public readonly stdClass $atributos
    )
        {
    }

    public function jsonSerialize(): array
    {
        return (array) $this->atributos;
    }
}
