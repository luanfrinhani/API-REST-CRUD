<?php

namespace Database\Seeders;

use App\Models\cadastro;
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
        // \App\Models\User::factory(10)->create();
        //$this->call(CadastroTableSeeder::class);
        cadastro::factory(5)->create();
    }
}
