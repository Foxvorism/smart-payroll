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
            'nama_role' => 'admin',
            'created_at' => $createdAt,
            'updated_at' => $updatedAt,
        ]);

        Role::insert([
            'nama_role' => 'tutor',
            'created_at' => $createdAt,
            'updated_at' => $updatedAt,
        ]);
    }
}
