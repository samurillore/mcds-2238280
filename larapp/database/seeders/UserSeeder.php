<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use \App\Models\User;//esto jala el modelo
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
        	'fullname' => 'Santiago Murillo Rendón',
	        'email' => 'smurillo@gmail.com',
	        'phone'=> 3015970822,
	        'birthdate'=> '1987-11-18',
	        'gender'=> 'Male',
	        'address'=> 'Carrera 43 # 66a 08',
	        'role'=> 'Admin',
	        'password'=> bcrypt('admin'),

        	/*'fullname' => Str::random(10),
	        'email' => Str::random(10).'@gmail.com',
	        'phone'=> Str::random(10),
	        'birthdate'=> Str::random(10),
	        'gender'=> Str::random(10),
	        'address'=> Str::random(10),
	        'rol'=> Str::random(10),
	        'active'=> Str::random(10),
	        'password'=> Str::random(10),*/


        ]);

        //Método ORM

        $user = new User;
        $user->fullname = 'Carolina Márquez';
     	$user->email = 'carolina.marquezn@autonoma.edu.co';
     	$user->phone = 300000000;
     	$user->birthdate = '1980-11-02';
     	$user->gender = 'Female';
     	$user->address = 'Neira';
     	$user->role = 'Editor';     	
        $user->password = bcrypt('editor Márquez');
        $user->save();
                                                  
    }
}
