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
            'description' => 'Editar usuarios'
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

        ###################################····GESTION····############################################
        //13
        Permission::create([
            'name'        => 'gestionclientes',
            'description' => 'gestion de clientes'
        ])->syncRoles([$role1]);
        //14
        Permission::create([
            'name'        => 'admin.clientes.index',
            'description' => 'Ver listado de clientes'
        ])->syncRoles([$role1]);
        //15
        Permission::create([
            'name'        => 'admin.clientes.create',
            'description' => 'Crear clientes'
        ])->syncRoles([$role1]);
        //16
        Permission::create([
            'name'        => 'admin.clientes.edit',
            'description' => 'Editar clientes'
        ])->syncRoles([$role1]);
        //17
        Permission::create([
            'name'        => 'admin.clientes.destroy',
            'description' => 'Eliminar clientes'
        ])->syncRoles([$role1]);
        //18
        Permission::create([
            'name'        => 'admin.renovaciones.index',
            'description' => 'Renovaciones'
        ])->syncRoles([$role1]);
        //19
        Permission::create([
            'name'        => 'admin.seguimientos.index',
            'description' => 'Seguimientos',
        ])->syncRoles([$role1]);
        //20
        Permission::create([
            'name'        => 'admin.adelantos.index',
            'description' => 'Adelantos'
        ])->syncRoles([$role1]);
        //21
        Permission::create([
            'name'        => 'admin.prioridad.index',
            'description' => 'Prioridad'
        ])->syncRoles([$role1]);
        //22
        Permission::create([
            'name'        => 'admin.estudiante.index',
            'description' => 'Estudiane'
        ])->syncRoles([$role1]);
        //23
        Permission::create([
            'name'        => 'admin.canada.index',
            'description' => 'Estudiane'
        ])->syncRoles([$role1]);
        //24
        Permission::create([
            'name'        => 'admin.citapasaporte.index',
            'description' => 'Cita Pasaporte'
        ])->syncRoles([$role1]);
         //25
         Permission::create([
            'name'        => 'seguridadsistema',
            'description' => 'seguridad del sistema'
        ])->syncRoles([$role1]);
        //26
        Permission::create([
            'name'        => 'resplados',
            'description' => 'seguridad del sistema'
        ])->syncRoles([$role1]);


    }

}
