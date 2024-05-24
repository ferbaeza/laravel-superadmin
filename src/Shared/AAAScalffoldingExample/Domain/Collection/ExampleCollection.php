<?php

namespace Baezeta\Admin\Shared\AAAScalffoldingExample\Domain\Collection;

use Baezeta\Admin\Shared\Collection\CollectionBase;
use Baezeta\Admin\Shared\AAAScalffoldingExample\Domain\Entity\ExampleEntity;

class ExampleCollection extends CollectionBase
{
    protected $name = self::class;
    protected $type = ExampleEntity::class;
}
