<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\pemain>
 */
class pemainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_pemain' => $this->faker->name(),
            'nomor_punggung' => $this->faker->numberBetween(1, 99),
            'posisi' => $this->faker->randomElement(['penyerang', 'gelandang', 'bek', 'penjaga gawang']),
        ];
    }
}
