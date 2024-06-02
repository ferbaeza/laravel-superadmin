<?php

namespace Baezeta\Admin\Admin\Usuarios\Infrastructure\Datasource;

use Illuminate\Support\Facades\Auth;
use Baezeta\Admin\Shared\ValueObjects\UuidValue;
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
        // dd($user->getLastActivity());
        $model = new SuperAdminUsuariosModel();
        $model->id = $user->getUserId();
        $model->nombre = $user->getNombre();
        $model->email = $user->getEmail();
        $model->password = $user->getPassword();
        $model->fk_role_id = $user->getRoleId();

        $model->save();
    }

    public function loginEmail(string $email, string $password, bool $recordar = false): bool | SuperAdminUser
    {
        $usuario = SuperAdminUsuariosModel::where('email', $email)->first();
        if ($usuario) {
            $coincidePassword = ($password === decryptPass($usuario->password));
            if ($coincidePassword) {
                return new SuperAdminUser(
                    id: new UuidValue($usuario->id),
                    nombre: $usuario->nombre,
                    email: $usuario->email,
                    password: $usuario->password,
                );
            }
        }
        return false;
    }

}
