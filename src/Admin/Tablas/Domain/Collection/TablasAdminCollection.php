<?php

namespace Baezeta\Admin\Admin\Tablas\Domain\Collection;

use Baezeta\Admin\Shared\Collection\CollectionBase;
use Baezeta\Admin\Admin\Tablas\Domain\Enums\TablasFiltro;
use Baezeta\Admin\Admin\Tablas\Domain\Entity\TablaAdminEntity;

class TablasAdminCollection extends CollectionBase
{
    protected $name = self::class;
    protected $type = TablaAdminEntity::class;

    public function filtradas()
    {
        $tablasOcultar = TablasFiltro::ocultas();
        $coleccion = new self();

        $this->each(function ($tabla) use ($tablasOcultar, $coleccion){

            if (in_array($tabla->getNombre(), $tablasOcultar)) {
                return;
            }
            $coleccion->add($tabla);
        });
        return $coleccion;
    }
}
