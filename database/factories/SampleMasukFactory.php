<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SampleMasuk>
 */
class SampleMasukFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'kode_sample_masuk' => $this->faker->unique()->numerify('SM-#####'),
            'nama_pengirim' => $this->faker->name,
            'tanggal_terima' => $this->faker->dateTimeBetween('-2 years', '-1 years'),
            'segment' => $this->faker->randomElement(['Domestic','Export']),
            'jenis_sample' => $this->faker->randomElement(['Complaint','Market']),
            'customer' => $this->faker->company,
            'product' => $this->faker->sentence(mt_rand(1,3)),
            'lot_number' => $this->faker->numerify('#####'),
            'problem' => $this->faker->sentence(mt_rand(2,4)),
            'deskripsi_sample' => $this->faker->text,
        ];
    }
}
