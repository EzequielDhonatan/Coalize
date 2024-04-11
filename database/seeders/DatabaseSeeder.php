<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\{

    Customer,
    Product,

}; // Models

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'name'      => 'Ezequiel Dhonatan',
            'email'     => 'ezequieldhonatan@ezedho.com.br',
            'password'  => bcrypt('123456789')
        ]);

        User::factory()->create([
            'name'      => 'Test User',
            'email'     => 'test@example.com'
        ]);

        Customer::factory()->count(50)->create();
        Product::factory()->count(50)->create();

    } // run

} // DatabaseSeeder
