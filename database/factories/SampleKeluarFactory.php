<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SampleKeluar>
 */
class SampleKeluarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'kode_sample_keluar' => $this->faker->unique()->numerify('SK-#####'),
            'expedisi_pengiriman' => $this->faker->company,
            'tanggal_kirim' => $this->faker->dateTimeBetween('-4 years', '-2 years'),
            'segment' => $this->faker->randomElement(['Domestic','Export']),
            'jenis_sample' => $this->faker->randomElement(['Complaint','Market']),
            'customer' => $this->faker->company,
            'product' => $this->faker->sentence(mt_rand(1,3)),
            'lot_number' => $this->faker->numerify('#####'),
            'deskripsi_sample' => $this->faker->text,
        ];
    }
}
