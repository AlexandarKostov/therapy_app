<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Doctor>
 */
class DoctorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'country' => $this->faker->country(),
            'city' => $this->faker->city(),
            'mobile_phone' => $this->faker->phoneNumber(),
            'date_of_birth' => $this->faker->date,
            'is_accepted' => $this->faker->boolean()
        ];
    }
}
