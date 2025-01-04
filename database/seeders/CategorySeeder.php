<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::factory()->create([
            'name' => 'Alimentação',
            'description' => 'supermercado e hortifrúti, entre outros'
        ]);
        Category::factory()->create([
            'name' => 'Despesas mensais fixas',
            'description' => 'assinaturas, contas, serviços'
        ]);
        Category::factory()->create([
            'name' => 'Educação',
            'description' => 'mensalidades escolares, faculdade, cursos livres'
        ]);
        Category::factory()->create([
            'name' => 'Impostos',
            'description' => 'impostos gerais'
        ]);
        Category::factory()->create([
            'name' => 'Lazer',
            'description' => 'restaurantes, passeios, viagens, ingressos para cinemas, shows'
        ]);
        Category::factory()->create([
            'name' => 'Moradia',
            'description' => 'aluguel, taxas de condomínio, financiamento de imóvel'
        ]);
        Category::factory()->create([
            'name' => 'Pessoal',
            'description' => 'vestuário, calçados, acessórios, presentes'
        ]);
        Category::factory()->create([
            'name' => 'Pets',
            'description' => 'alimentação, veterinário, petshop'
        ]);
        Category::factory()->create([
            'name' => 'Saúde',
            'description' => 'consultas médicas, exames clínicos, planos de saúde'
        ]);
        Category::factory()->create([
            'name' => 'Transporte',
            'description' => 'combustível, passagens de ônibus'
        ]);
        Category::factory()->create([
            'name' => 'Vestuário',
            'description' => 'roupas, sapatos, acessórios'
        ]);
    }
}
