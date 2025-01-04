<?php

namespace Database\Seeders;

use App\Models\Account;
use App\Models\Category;
use App\Models\PaymentMethod;
use App\Models\Transaction;
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
            'name' => 'Tharcius',
            'email' => 'user@email.com',
            'password' => Hash::make('123456')
        ]);
        
        $this->call([
            CategorySeeder::class,
            TagSeeder::class
        ]);

        Account::factory()->count(7)->create();
        PaymentMethod::factory()->count(6)->create();
        Transaction::factory()->count(100)->create();
    }
}
