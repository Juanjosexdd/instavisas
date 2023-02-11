<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'ADMINISTRADOR']);
        $role2 = Role::create(['name' => 'USUARIO']);

        // 1
        Permission::create([
            'name' => 'home',
            'description' => 'Ver el dashboard'
        ])->syncRoles([$role1, $role2]);

        ###################################····USUARIOS····############################################
        //2
        Permission::create([
            'name'        => 'admin.users.index',
            'description' => 'Ver listado de usuarios'
        ])->syncRoles([$role1]);
        //3
        Permission::create([
            'name'        => 'admin.users.create',
            'description' => 'Crear usuarios'
        ])->syncRoles([$role1]);
        //4
        Permission::create([
            'name'        => 'admin.users.edit',
            'description' => 'Eliminar usuarios'
        ])->syncRoles([$role1]);
        //5
        Permission::create([
            'name'        => 'admin.users.destroy',
            'description' => 'Cambiar estatus de usuarios'
        ])->syncRoles([$role1]);
        //6
        Permission::create([
            'name'        => 'admin.users.UpdateStatus',
            'description' => 'Cambiar estatus de usuarios'
        ])->syncRoles([$role1]);

        ################################····ROLES Y PERMISOS····########################################
        //7
        Permission::create([
            'name'        => 'admin.roles.index',
            'description' => 'Ver listado de Roles'
        ])->syncRoles([$role1]);
        //8
        Permission::create([
            'name'        => 'admin.roles.create',
            'description' => 'Crear Roles'
        ])->syncRoles([$role1]);
        //9
        Permission::create([
            'name'        => 'admin.roles.edit',
            'description' => 'Eliminar Roles'
        ])->syncRoles([$role1]);
        //10
        Permission::create([
            'name'        => 'admin.roles.destroy',
            'description' => 'Cambiar estatus de Roles'
        ])->syncRoles([$role1]);
        #################################····LOGS Y SESIONES····########################################
        //11
        Permission::create([
            'name'        => 'admin.logs.index',
            'description' => 'Ver listado de Registros'
        ])->syncRoles([$role1]);
        //12
        Permission::create([
            'name'        => 'admin.logins.index',
            'description' => 'Ver listado de Sesiones'
        ])->syncRoles([$role1]);

    }

}
