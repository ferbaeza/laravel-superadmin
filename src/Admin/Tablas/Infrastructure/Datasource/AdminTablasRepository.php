<?php

namespace Baezeta\Admin\Admin\Tablas\Infrastructure\Datasource;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Baezeta\Admin\Admin\Tablas\Domain\Interfaces\AdminTablasRepositoryInterface;
use Symfony\Component\Finder\Finder;

class AdminTablasRepository implements AdminTablasRepositoryInterface
{
    public function listar()
    {


        $finder = new Finder();
        $finder->files()->in(app_path());

        $models = [];

        foreach ($finder as $file) {
            dump($file);
            $namespace = 'App\\' . str_replace(['/', '.php'], ['\\', ''], $file->getRelativePathname());

            if (is_subclass_of($namespace, 'Illuminate\Database\Eloquent\Model')) {
                $models[] = $namespace;
            }
        }

        dd($models);




            // $models = DB::models();
        $models = array_filter(
            get_declared_classes(),
            function ($class) {
                return is_subclass_of($class, 'Illuminate\Database\Eloquent\Model');
            }
        );

        $models = Model::getModels();
        dd($models);

    }

}
