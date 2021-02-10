<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use App\Post;
use Illuminate\Http\File;

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
        $gender="Female";
        //$image = $faker->image();
        //$imageFile = new File($image);
        if ($gender=="Male") {
            $name="firstNameMale";
            # code...
        }
        else
        {
            $name="firstNameFemale";
        }

        return [
            'fullname'          => $this->faker->$name,
            'email'             => $this->faker->unique()->safeEmail,
            'phone'             => $this->faker->numberBetween(3101000000, 3202000000) ,
            'birthdate'         => $this->faker->dateTimeBetween('1960-01-01', '1999-12-31'),
            'gender'            => $gender,
            'address'           => $this->faker->streetAddress,
            'photo'             => $this->faker->imageUrl(),
            'role'              => 'Editor',      
            'email_verified_at' => now(),
            'password'          => bcrypt('editor'), 
            'remember_token'    => Str::random(10),            
        ];
    }
}
