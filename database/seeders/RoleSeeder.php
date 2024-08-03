<?php

namespace Database\Seeders;

use App\Models\Role;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $createdAt = Carbon::today()->toDateString();
        $updatedAt = Carbon::today()->toDateString();

        Role::insert([
            'role' => 'Admin',
            'created_at' => $createdAt,
            'updated_at' => $updatedAt,
        ]);

        Role::insert([
            'role' => 'Tutor SD',
            'created_at' => $createdAt,
            'updated_at' => $updatedAt,
        ]);

        Role::insert([
            'role' => 'Tutor SMP/SMA',
            'created_at' => $createdAt,
            'updated_at' => $updatedAt,
        ]);
    }
}
