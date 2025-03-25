<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Cliente',
            'email' => 'cliente@teste.com',
            'password' => Hash::make('123456'),
            'role' => 'cliente'
        ]);

        User::create([
            'name' => 'Funcionario',
            'email' => 'funcionario@teste.com',
            'password' => Hash::make('123456'),
            'role' => 'funcionario'
        ]);

        User::create([
            'name' => 'Administrador',
            'email' => 'adm@teste.com',
            'password' => Hash::make('123456'),
            'role' => 'administrador'
        ]);
    }
}
