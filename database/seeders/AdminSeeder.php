<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Models\User;

class AdminSeeder extends Seeder {
    /**
     * Run the database seeds.
     */

     public function run(): void {
        User::create([
            'name' => 'Administrador',
            'email' => 'admin@dev.com',
            'is_admin' => 1,
            'password' => Hash::make('12345678')
        ]);
     }
}