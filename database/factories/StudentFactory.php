<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\City;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        // Créer un utilisateur
        $user = User::factory()->create(); // Crée le User

        return [
            'name' => $user->name,
            'address' => $this->faker->address(),
            'phone' => $this->faker->phoneNumber(),
            'email' => $user->email,
            'dateOfBirth' => $this->faker->date(),
            'city_id' => City::inRandomOrder()->first()->id,
            'user_id' => $user->id,
        ];
    }
}
