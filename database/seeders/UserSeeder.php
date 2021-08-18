<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'id' => 3,
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => NULL,
            'password' => Hash::make('12345678')
        ]);

        $admin->assignRole('Administrador');
    }
}
