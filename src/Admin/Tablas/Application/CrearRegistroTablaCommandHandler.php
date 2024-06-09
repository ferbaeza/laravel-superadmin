<?php

namespace Baezeta\Admin\Admin\Tablas\Application;

use stdClass;
use Baezeta\Admin\Admin\Tablas\Domain\Enums\TablasFiltro;
use Baezeta\Admin\Admin\Tablas\Domain\Entity\TablaAdminEntity;
use Baezeta\Admin\Shared\Exceptions\Tablas\ColumnaNoExisteException;
use Baezeta\Admin\Admin\Tablas\Domain\Interfaces\AdminTablasRepositoryInterface;

class CrearRegistroTablaCommandHandler
{
    public function __construct(
        protected readonly AdminTablasRepositoryInterface $repositorio
    )
        {
    }

    public function run(CrearRegistroTablaCommand $command) : TablaAdminEntity
    {
        $entidad = $this->repositorio->getEntity($command->idTabla);
        $this->service($entidad, $command->values);


        return $this->repositorio->getEntity($command->idTabla);
    }


    public function service(TablaAdminEntity $entidad, stdClass $values)
    {
        $columnas = array_map(function($columna) {
            return $columna->name;
        }, $entidad->columnas->toArray());

        foreach ($values as $columna => $value) {
            if (!in_array($columna, $columnas)) {
                throw ColumnaNoExisteException::drop($columna, $entidad->nombre);
            }

            $entidad->columnas->each(function($item) use ($values) {
                $validador = TablasFiltro::from($item->typeName);
                $validador->validar($values);
            });
        }


    }

}
