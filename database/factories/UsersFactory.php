<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Users>
 */
class UsersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        return [
            'id' => 2,
            'name' => fake()->name(),
            'email' => 'kashifkhan0336@gmail.com',
            'password' => '$argon2id$v=19$m=65536,t=4,p=1$RmN4WXZDMmhSYnV3QWp3SQ$tpeCHXkd/+Dv0XdJ5wPmrCgMO83qntxp6mzV2aG0/HQ', // password
            'remember_token' => Str::random(10),
            'role' => 'dealer'
        ];
    }
}
