<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'usuarios']);
        Permission::create(['name' => 'ajustes']);
        Permission::create(['name' => 'nosotros']);
        Permission::create(['name' => 'servicios']);
        Permission::create(['name' => 'portafolio']);
        Permission::create(['name' => 'contacto']);
        Permission::create(['name' => 'blogs']);
        Permission::create(['name' => 'logs']);
    }
}
