<?php

namespace Database\Factories;

use App\Models\Page;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class PageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Page::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $faker = Faker::create();

        return [
            'username' => $faker->username,
            'password' => $faker->password,
        ];


        //        return [
//            'username' => Str::random(7),
//            'password' => Str::random(10),
//        ];
    }
}
