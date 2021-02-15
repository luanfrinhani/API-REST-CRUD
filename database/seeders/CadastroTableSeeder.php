<?php

namespace Database\Seeders;

use App\Models\cadastro;
use Faker\Factory\CadastroFactory;
use Illuminate\Database\Seeder;

class CadastroTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        cadastro::factory()->count(5)->create();
    }
}
