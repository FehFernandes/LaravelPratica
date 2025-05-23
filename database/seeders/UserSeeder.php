<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Criar usuário administrador
        User::create([
            'name' => 'Administrador',
            'email' => 'admin@admin.com',
            'password' => Hash::make('123456'),
            'email_verified_at' => now(),
        ]);

        // Criar usuário comum
        User::create([
            'name' => 'João Silva',
            'email' => 'joao@teste.com',
            'password' => Hash::make('123456'),
            'email_verified_at' => now(),
        ]);

        // Criar usuário demo
        User::create([
            'name' => 'Maria Santos',
            'email' => 'maria@teste.com',
            'password' => Hash::make('123456'),
            'email_verified_at' => now(),
        ]);
    }
}
