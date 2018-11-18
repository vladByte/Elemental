<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    

        // USUARIOS 

        Permission::create([

            // Listar Usuarios.
            'name'          => 'Navegar Usuarios',
            'slug'          => 'users.index',
            'description'   => 'Lista todos los usuarios del sistema',

        ]);
        Permission::create([

            // Ver Detalle de Usuarios.
            'name'          => 'Ver Detalle de Usuarios',
            'slug'          => 'users.show',
            'description'   => 'Ver el detalle de todos los usuarios del sistema',

        ]);
        Permission::create([

            // Editar Usuarios.
            'name'          => 'Ediatar Usuarios',
            'slug'          => 'users.edit',
            'description'   => 'Edita los usuarios del sistema',

        ]);
        Permission::create([

            // Eliminar Usuarios.
            'name'          => 'Eliminar Usuarios',
            'slug'          => 'users.destroy',
            'description'   => 'Elimina  usuarios del sistema',

        ]);

        // ROLES 

        Permission::create([

            // Listar Roles.
            'name'          => 'Navegar Roles',
            'slug'          => 'roles.index',
            'description'   => 'Lista todos los Roles del sistema',

        ]);
        Permission::create([

            // Ver Detalle de Roles.
            'name'          => 'Ver Detalle de Roles',
            'slug'          => 'roles.show',
            'description'   => 'Ver el detalle de todos los Roles del sistema',

        ]);
        Permission::create([

            // Crear Roles.
            'name'          => 'Crear Roles',
            'slug'          => 'roles.create',
            'description'   => 'Crear Roles del sistema',

        ]);
        Permission::create([

            // Editar Roles.
            'name'          => 'Editar Roles',
            'slug'          => 'roles.edit',
            'description'   => 'Editar Roles del sistema',

        ]);
        Permission::create([

            // Eliminar Roles.
            'name'          => 'Eliminar Roles',
            'slug'          => 'roles.destroy',
            'description'   => 'Eliminar  Roles del sistema',

        ]);

        // PRODUCTOS 

        Permission::create([

            // Listar Productos.
            'name'          => 'Navegar Productos',
            'slug'          => 'products.index',
            'description'   => 'Lista todos los Productos del sistema',

        ]);
        Permission::create([

            // Ver Detalle de Productos.
            'name'          => 'Ver Detalle de Productos',
            'slug'          => 'products.show',
            'description'   => 'Ver el detalle de todos los Productos del sistema',

        ]);
        Permission::create([

            // Crear Productos.
            'name'          => 'Crear Productos',
            'slug'          => 'products.create',
            'description'   => 'Crear Productos del sistema',

        ]);
        Permission::create([

            // Editar Productos.
            'name'          => 'Editar Productos',
            'slug'          => 'products.edit',
            'description'   => 'Editar Productos del sistema',

        ]);
        Permission::create([

            // Eliminar Productos.
            'name'          => 'Eliminar Productos',
            'slug'          => 'products.destroy',
            'description'   => 'Eliminar  Productos del sistema',

        ]);
    }
}
