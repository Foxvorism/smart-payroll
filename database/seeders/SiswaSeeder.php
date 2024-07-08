<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Carbon\Carbon;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = FakerFactory::create('id_ID');

        $createdAt = Carbon::today()->toDateString();
        $updatedAt = Carbon::today()->toDateString();

        for ($i = 0; $i < 5; $i++) {
            Siswa::insert([
                'nama' => $faker->name,
                'tipe' => 'full',
                'created_at' => $createdAt,
                'updated_at' => $updatedAt,
            ]);
        }
    }
}
