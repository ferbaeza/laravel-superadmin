<?php

namespace Baezeta\Admin\Shared\AAAScalffoldingExample\Infrastructure\Bindings;

use Baezeta\Admin\Shared\AAAScalffoldingExample\Infrastructure\Datasource\ExampleRepository;
use Baezeta\Admin\Shared\AAAScalffoldingExample\Domain\Interfaces\ExampleRepositoryInterface;

class ExampleRegisterBindings
{
    public static function register(): array
    {
        return [
            ExampleRepositoryInterface::class => ExampleRepository::class,
        ];
    }

}
