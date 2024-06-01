<?php

namespace Baezeta\Admin\Admin\Tablas\Infrastructure\Datasource;

use Baezeta\Admin\Shared\ValueObjects\UuidValue;
use Baezeta\Admin\Admin\Tablas\Domain\Entity\ColumnaEntity;
use Baezeta\Admin\Admin\Tablas\Domain\Entity\TablaAdminEntity;
use Baezeta\Admin\Admin\Tablas\Domain\Collection\ColumnasCollection;
use Baezeta\Admin\Admin\Tablas\Domain\Collection\TablasAdminCollection;
use Baezeta\Admin\Admin\Tablas\Domain\Interfaces\AdminTablasRepositoryInterface;
use Baezeta\Admin\Shared\Laravel\Eloquent\SuperAdminDatabaseTablas\SuperAdminDatabaseTablasModel;


class AdminTablasRepository implements AdminTablasRepositoryInterface
{
    public function getEntity(string $idTabla)
    {
        $tabla = SuperAdminDatabaseTablasModel::find($idTabla);

        $columnasCollection = new ColumnasCollection();

        $columnas = json_decode($tabla->columnas, true);
        foreach ($columnas as $columna) {
            $columnasCollection->push(new ColumnaEntity(
                name: $columna['name'],
                type: $columna['type'],
                nullable: $columna['nullable'] == 1 ? true : false,
                typeName: $columna['typeName'],
            ));
        }

        return  new TablaAdminEntity(
            id: new UuidValue($tabla->id),
            nombre: $tabla->nombre,
            columnas: $columnasCollection
        );
    }



    public function getCollection(): TablasAdminCollection
    {
        $tablas = SuperAdminDatabaseTablasModel::all();

        $tablasColllection = new TablasAdminCollection();

        $tablas->each(function ($table) use (&$tablasColllection) {
            
            $columnasCollection = new ColumnasCollection();

            $columnas = json_decode($table->columnas, true);
            foreach ($columnas as $columna) {
                $columnasCollection->push(new ColumnaEntity(
                    name: $columna['name'],
                    type: $columna['type'],
                    nullable: $columna['nullable'] == 1 ? true : false,
                    typeName: $columna['typeName'],
                ));
            }

            $tablaEntidad = new TablaAdminEntity(
                id: new UuidValue($table->id),
                nombre: $table->nombre,
                columnas: $columnasCollection
            );

            $tablasColllection->push($tablaEntidad);
        });

        return $tablasColllection;
    }

}
