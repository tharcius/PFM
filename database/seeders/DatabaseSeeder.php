<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        User::factory()->create([
            'name' => 'Tharcius 2',
            'email' => 'user@email.com',
            'password' => Hash::make('123456')
        ]);

        // Criando as categorias (métodos de pagamento)
        Category::factory()->create([
            'name' => 'Dinheiro',
            'description' => 'Dinheiro'
        ]);
        Category::factory()->create([
            'name' => 'Cartão de Crédito',
            'description' => 'Cartão de Crédito'
        ]);
        Category::factory()->create([
            'name' => 'Cartão de Débito',
            'description' => 'Cartão de Débito'
        ]);
        Category::factory()->create([
            'name' => 'Vale Refeição',
            'description' => 'Vale Refeição'
        ]);
        Category::factory()->create([
            'name' => 'PIX',
            'description' => 'PIX'
        ]);
        Category::factory()->create([
            'name' => 'Boleto Bancário',
            'description' => 'Boleto Bancário'
        ]);
    }
}
