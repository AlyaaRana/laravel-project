<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
        return [

            'nis' => fake()->unique()->randomNumber(5),
            'nama' => fake()->name(),
            'kelas_id' => fake()->numberBetween(1, 6),
            'alamat' => fake()->address,
            'tanggal_lahir' => fake()->date(),

        ];
    }
}
