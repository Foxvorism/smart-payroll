<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create('id_ID');

        $createdAt = Carbon::today()->toDateString();
        $updatedAt = Carbon::today()->toDateString();
        $roles = Role::pluck('id')->toArray();

        for ($i = 0; $i < 3; $i++) {
            User::insert([
                'id_role' => $i + 1,
                'name' => $faker->name,
                'username' => 'maul' . $i + 1,
                'password' => Hash::make('rahasia'),
                'created_at' => $createdAt,
                'updated_at' => $updatedAt,
            ]);
        }
    }
}
