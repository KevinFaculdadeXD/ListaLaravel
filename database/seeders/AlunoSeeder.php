<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Aluno;

class AlunoSeeder extends Seeder
{
    public function run(): void
    {
        $cursos = ['ADS', 'Engenharia', 'Direito', 'Medicina', 'Pedagogia'];

        for ($i = 1; $i <= 10; $i++) {
            Aluno::create([
                'nome' => "Aluno $i",
                'curso' => $cursos[array_rand($cursos)],
            ]);
        }
    }
}