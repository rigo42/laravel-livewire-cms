<?php

namespace Database\Seeders;

use App\Models\BlogTag;
use Illuminate\Database\Seeder;

class BlogTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BlogTag::create([
            'name' => 'Tips',
        ]);
        BlogTag::create([
            'name' => '¿Sabias qué?',
        ]);
    }
}
