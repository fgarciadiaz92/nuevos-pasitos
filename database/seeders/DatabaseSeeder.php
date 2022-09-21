<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Prueba;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         /*$this->call(PruebaSeeder::class);*/
        Prueba::factory(9)->create();
    }
}
