<?php

namespace Baezeta\Admin\Admin\Usuarios\Infrastructure\Datasource;

use Baezeta\Admin\Shared\DB\Domain\Interfaces\DataBaseRepositoryInterfaces;
use Baezeta\Admin\Admin\Usuarios\Domain\Collection\UsuariosAplicacionCollection;
use Baezeta\Admin\Admin\Usuarios\Domain\Interfaces\UsuariosAplicacionRepositoryInterface;

class UsuariosAplicacionRepository implements UsuariosAplicacionRepositoryInterface
{
    public function __construct(
        protected readonly DataBaseRepositoryInterfaces $dataBaseRepository
    ) {
    }
    
    public function getCollection(): UsuariosAplicacionCollection
    {
        $usuarios = new UsuariosAplicacionCollection();
        $data = $this->dataBaseRepository->getDatabaseInformationColumnFromDB(config('package.usuarios'));
        dd($data);
        return $usuarios;
    }
}
