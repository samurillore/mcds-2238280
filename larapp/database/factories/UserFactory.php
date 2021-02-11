<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $gen= $this->faker->randomElement($array = array('female', 'male'));
        $fn=$this->faker->firstname($gen);
        $ln=$this->faker->lastname();
        $wn=$fn." ".$ln;
        $email=$fn.".".$ln."@".$this->faker->randomElement($array = array('gmail.com', 'misena.edu.co'));
        return [
            'gender'            =>$gen,     
           //'fullname'          => $this->faker->firstname($gen).faker->lastname($gen),
            'fullname'          =>$wn,
            //'email'             => $this->faker->unique()->safeEmail,
            'email'             =>$email,
            'phone'             => $this->faker->numberBetween(3101000000, 3202000000) ,
            'birthdate'         => $this->faker->dateTimeBetween('1960-01-01', '1999-12-31'),

            'address'           => $this->faker->streetAddress,
            //'photo'             => $this->faker->imageUrl(storage_path('app/public/imgs'),$width = 640, $height = 480,'people'),
            //'photo'             => $this->faker->imageUrl(storage_path('app/public/imgs')),
            'photo'             =>'http://lorempixel.com/800/600/people/',
            'role'              => 'Editor',      
            'email_verified_at' => now(),
            'password'          => bcrypt('editor'), 
            'remember_token'    => Str::random(10),
        ];
    }
}
