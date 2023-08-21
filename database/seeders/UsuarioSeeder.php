<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Usuario;
use Illuminate\Support\Str;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=0; $i < 5; $i++) {
            Usuario::create([
                'cpf' => "0000000000$i",
                'nome' => 'and'.Str::random(3),
                'data' => date('Y-m-d', strtotime("2000-05-0$i")),
            ]);
        }
    }
}
