<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //busca todos los factorys de los modelos  y crea datos ramdoms 
        \App\Models\User::factory(10)->create();
        \App\Models\Category::factory(10)->create();
    }
}
