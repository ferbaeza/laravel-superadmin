<?php

namespace Baezeta\Admin\Admin\Dashboard\DataTable\Application;

class DatatableInfoCommandHandler
{
    public function __construct(
        protected readonly ListarColumnasDatatableCommandHandler $columnasHandler,
        protected readonly ListarDatosDatatableCommandHandler $datossHandler,
    )
        {
    }

    public function run(DatatableInfoCommand $command)
    {
        return [
            'columns' => $this->columnasHandler->run(new ListarColumnasDatatableCommand($command->nombreTabla)),
            'data' => $this->datossHandler->run(new ListarDatosDatatableCommand($command->nombreTabla)),
        ];
    }
}
