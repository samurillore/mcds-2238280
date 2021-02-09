<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Modles\User;//esto jala el modelo
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
        	UserSeeder::class,

        ]);
        	//CategorySeeder::class,
        	//GameSeeder::class,/**


        // \App\Models\User::factory(10)->create();
    }
}
