<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tag::factory()->create([
            'name' => 'Água'
        ]);
        Tag::factory()->create([
            'name' => 'Aliexpress'
        ]);
        Tag::factory()->create([
            'name' => 'Amazon'
        ]);
        Tag::factory()->create([
            'name' => 'Assai'
        ]);
        Tag::factory()->create([
            'name' => 'Atacadão'
        ]);
        Tag::factory()->create([
            'name' => 'Burguer King'
        ]);
        Tag::factory()->create([
            'name' => 'Carrefour'
        ]);
        Tag::factory()->create([
            'name' => 'CrunchyRoll'
        ]);
        Tag::factory()->create([
            'name' => 'CTV'
        ]);
        Tag::factory()->create([
            'name' => 'Feira'
        ]);
        Tag::factory()->create([
            'name' => 'iFood'
        ]);
        Tag::factory()->create([
            'name' => 'Kabum!'
        ]);
        Tag::factory()->create([
            'name' => 'Luz'
        ]);
        Tag::factory()->create([
            'name' => 'MacDonald\'s'
        ]);
        Tag::factory()->create([
            'name' => 'Max'
        ]);
        Tag::factory()->create([
            'name' => 'Mercado Livre'
        ]);
        Tag::factory()->create([
            'name' => 'Padaria'
        ]);
        Tag::factory()->create([
            'name' => 'Paulistão'
        ]);
        Tag::factory()->create([
            'name' => 'Provedor Internet'
        ]);
        Tag::factory()->create([
            'name' => 'Rappi'
        ]);
        Tag::factory()->create([
            'name' => 'Sam\'s Club'
        ]);
        Tag::factory()->create([
            'name' => 'Shopee'
        ]);
        Tag::factory()->create([
            'name' => 'Temu'
        ]);
        Tag::factory()->create([
            'name' => 'Tenda'
        ]);
        Tag::factory()->create([
            'name' => 'Tonin'
        ]);
        Tag::factory()->create([
            'name' => 'Ultragaz'
        ]);
    }
}
