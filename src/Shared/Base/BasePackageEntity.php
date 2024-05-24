<?php

namespace Baezeta\Admin\Shared\Base;

use Baezeta\Admin\Shared\ValueObjects\FechaValue;
use Baezeta\Admin\Shared\ValueObjects\EntityIdValue;

abstract class BasePackageEntity
{
    private ?EntityIdValue $idClass = null;
    private ?FechaValue $fechaStart = null;


    public function __construct(

    ) {
        $this->idClass = EntityIdValue::create();
        $this->fechaStart = FechaValue::create();
    }

    public function parentSerialize(): mixed
    {
        return get_object_vars($this);
    }

    public function getIdClass(): EntityIdValue
    {
        return $this->idClass;
    }

    public function getFechaStart(): FechaValue
    {
        return $this->fechaStart;
    }
}



