<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FormLaborat>
 */
class FormLaboratFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'kode_form_laborat' => $this->faker->unique()->numerify('FL-#####'),
            'sample_masuk_id' => $this->faker->numberBetween(1, 60),
            'karyawan_id' => $this->faker->numberBetween(1, 10),
            'tanggal_kirim_laborat' => $this->faker->dateTimeBetween('-2 years', '-1 years'),
            'status_laborat' => $this->faker->randomElement(['Diproses','Selesai','Batal']),
            'kode_laporan' => $this->faker->numerify('LAB-#####'),
            'tanggal_selesai_laborat' => $this->faker->dateTimeBetween('-2 years', '-1 years'),
            'status_sample' => $this->faker->randomElement(['Kembali','Tidak Kembali']),
            'keterangan' => $this->faker->text,
        ];
    }
}
