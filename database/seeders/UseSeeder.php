<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $createdAt = Carbon::today()->toDateString();
        $updatedAt = Carbon::today()->toDateString();

        User::insert([
            'id_role' => 1,
            'name' => 'foxvorism',
            'username' => 'maul',
            'password' => Hash::make('rahasia'),
            'created_at' => $createdAt,
            'updated_at' => $updatedAt,
        ]);
    }
}
