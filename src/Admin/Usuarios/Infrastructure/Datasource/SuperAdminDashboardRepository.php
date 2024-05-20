<?php

namespace Baezeta\Admin\Admin\Usuarios\Infrastructure\Datasource;

use Baezeta\Admin\Admin\Usuarios\Domain\Entity\SuperAdminUser;
use Baezeta\Admin\Shared\Laravel\Eloquent\SuperAdminUsuarios\SuperAdminUsuariosModel;
use Baezeta\Admin\Admin\Usuarios\Domain\Interfaces\SuperAdminDashboardRepositoryInterface;

class SuperAdminDashboardRepository implements SuperAdminDashboardRepositoryInterface
{
    public function getEntity(string $email): bool
    {
        $model = SuperAdminUsuariosModel::where('email', $email)->first();
        return $model ? true : false;
    }

    public function save(SuperAdminUser $user): void
    {
        $model = new SuperAdminUsuariosModel();
        $model->id = $user->getUserId();
        $model->email = $user->getEmail();
        $model->password = $user->getPassword();
        $model->last_activity = $user->getLastActivity();
        $model->save();
    }

}
