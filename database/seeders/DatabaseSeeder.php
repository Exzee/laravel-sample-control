<?php

namespace Database\Seeders;

use App\Models\FormLaborat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Karyawan;
use App\Models\Samplekeluar;
use App\Models\Samplemasuk;
Use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(15)->create();
        Karyawan::factory(10)->create();
        Samplemasuk::factory(100)->create();
        Samplekeluar::factory(15)->create();
        FormLaborat::factory(15)->create();

        User::factory()->create([
            'name' => 'Muhammad Rizqi',
            'username' => 'rizqi',
            'email' => 'makosh@gmail.com',
            'password' => bcrypt('password'),
            'role_user' => 'Admin',
        ]);
        User::factory()->create([
            'name' => 'Admin1',
            'username' => 'Admin1',
            'email' => 'admin@offrizqi.site',
            'password' => bcrypt('password'),
            'role_user' => 'Admin',
        ]);
    }
}
