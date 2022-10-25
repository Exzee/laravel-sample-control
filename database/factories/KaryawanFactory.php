<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use stdClass;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Karyawan>
 */
class KaryawanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    
    public function definition()
    {
     
        return [
            'no_badge' => $this->faker->unique()->numerify('#####'),
            'nama_karyawan' => $this->faker->name,
            'jenis_kelamin' => $this->faker->randomElement(['Laki-laki', 'Perempuan']),
            'tanggal_lahir' => $this->faker->dateTimeBetween('-30 years', '-20 years'),
            'email' => $this->faker->unique()->safeEmail,
            'no_hp' => $this->faker->phoneNumber,
            'agama' => $this->faker->randomElement(['Islam', 'Kristen', 'Katolik', 'Hindu', 'Budha']),
            'tahun_masuk' => $this->faker->numerify('####'),
            'status_pernikahan' => $this->faker->randomElement(['Menikah', 'Belum Menikah']),
            'jabatan' => $this->faker->randomElement(['Operator', 'Supervisor','Superintendent','Manager','General Manager','Deputy General Manager']),
            'status_jabatan' => $this->faker->randomElement(['Tetap','Kontrak']),
            // 'foto_karyawan' => $this->faker->image(storage_path('app/public/avatars'), 640, 480, null, false),
            // 'foto_karyawan' => $this->faker->image('storage/avatars',400,300, null, true),
            // 'foto_karyawan' => $this->faker->image('public/storage/avatars', null, true) 

            // 'foto_karyawan' => $this->faker->image('storage/app/public/avatars',400,300, null, false), 


        ];
    }
}
