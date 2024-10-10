<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Project;
use App\Models\Proposal;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Cria 200 usuários usando uma fábrica de usuários.
        User::factory()->count(200)->create();                

        // Seleciona 10 usuários de forma aleatória.
        User::query()->inRandomOrder()->limit(10)->get()
            // Para cada um dos 10 usuários, executa a função a seguir.
            ->each(function (User $u) {
                // Cria um projeto associado ao usuário atual (definido como 'created_by').
                $project = Project::factory()->create(['created_by' => $u->id]);
                
                // Cria entre 4 e 45 propostas associadas ao projeto recém-criado.
                Proposal::factory()->count(random_int(4, 45))->create(['project_id' => $project->id]);
            });
    }
}
