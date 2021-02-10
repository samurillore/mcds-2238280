<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use \App\Models\Game;//esto jala el modelo

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('games')->insert([
        	'name' => 'Mario Kart',
	        'description' => "Lorem ipsum dolor sit amet'",
	        'user_id' => 1,
	        'category_id' => 1,
	        'slider' =>1,
	        'price'=>100,
		]);
        //Metodo ORM
 		$gm = new Game;
        $gm->name = 'PES';
     	$gm->description = 'ProEvolutionSoccer';
     	$gm->user_id = 2;
     	$gm->category_id = 1;
     	$gm->slider = 1;
     	$gm->price = 50;
        $gm->save();

        $gm = new Game;
        $gm->name = 'Super Mario Odisey';
     	$gm->description = 'ProEvolutionSoccer';
     	$gm->user_id = 1;
     	$gm->category_id = 3;
     	$gm->slider = 0;
     	$gm->price = 70;
        $gm->save();
    }
}
