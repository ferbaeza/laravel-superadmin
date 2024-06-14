<?php

namespace Baezeta\Admin\Admin\Tablas\Application;

use stdClass;
use Baezeta\Admin\Admin\Tablas\Domain\Enums\TablasFiltro;
use Baezeta\Admin\Admin\Tablas\Domain\Entity\TablaAdminEntity;
use Baezeta\Admin\Shared\Exceptions\Shared\ValidadorException;
use Baezeta\Admin\Shared\Exceptions\Tablas\ColumnaNoExisteException;
use Baezeta\Admin\Admin\Tablas\Domain\Interfaces\TablasRepositoryInterface;
use Baezeta\Admin\Admin\Tablas\Domain\Interfaces\AdminTablasRepositoryInterface;

class CrearRegistroTablaCommandHandler
{
    public function __construct(
        protected readonly AdminTablasRepositoryInterface $repositorio,
        protected readonly TablasRepositoryInterface $tablasRepository
    )
        {
    }

    public function run(CrearRegistroTablaCommand $command) : stdClass
    {
        $entidad = $this->repositorio->getEntity($command->idTabla);
        $stdClass = $this->service($entidad, $command->values);
        
        return $this->tablasRepository->crearRegistro($stdClass);
    }


    public function service(TablaAdminEntity $entidad, stdClass $tableInputs) : stdClass
    {
        $columnas = array_map(function($columna) {
            return $columna->name;
        }, $entidad->columnas->toArray());

        foreach ($tableInputs as $columna => $value) {
            if (!in_array($columna, $columnas)) {
                throw ColumnaNoExisteException::drop($columna, $entidad->nombre);
            }
            $entidad->columnas->each(function($item) use ($tableInputs) {
                $validador = TablasFiltro::from($item->typeName);

                if(!$validador->validar($tableInputs->{$item->name})) {
                    throw ValidadorException::drop($item->name, $item->typeName);
                }
            });
        }
        $entidadNueva = new stdClass();
        $entidadNueva->tabla = $entidad->nombre;
        $entidadNueva->columnas = $tableInputs;
        return $entidadNueva;
    }

}
