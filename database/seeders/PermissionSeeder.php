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
        //System
        Permission::create(['name' => 'system usuarios']);
        Permission::create(['name' => 'system ajustes']);

        //Site
        Permission::create(['name' => 'site nosotros']);
        Permission::create(['name' => 'site servicios']);
        Permission::create(['name' => 'site portafolio']);
        Permission::create(['name' => 'site contacto']);

        //Shop
        Permission::create(['name' => 'shop inicio']);
        Permission::create(['name' => 'shop carrito']);
        Permission::create(['name' => 'shop checkout']);
        Permission::create(['name' => 'shop pedidos']);
        Permission::create(['name' => 'shop categorias']);
        Permission::create(['name' => 'shop marcas']);
        Permission::create(['name' => 'shop generos']);
        Permission::create(['name' => 'shop productos']);

        //CRM
        Permission::create(['name' => 'crm cuentas']);
        Permission::create(['name' => 'crm servicios']);
        Permission::create(['name' => 'crm prospectos']);
        Permission::create(['name' => 'crm clientes']);
        Permission::create(['name' => 'crm facturas']);
        Permission::create(['name' => 'crm pagos']);
        Permission::create(['name' => 'crm gastos']);
        Permission::create(['name' => 'crm reportes']);
        Permission::create(['name' => 'crm calendario']);
        Permission::create(['name' => 'crm cotizaciones']);
        Permission::create(['name' => 'crm proyectos']);
        Permission::create(['name' => 'crm proveedores']);
        Permission::create(['name' => 'crm tipo de servicio']);
        Permission::create(['name' => 'crm log']);
    }
}
