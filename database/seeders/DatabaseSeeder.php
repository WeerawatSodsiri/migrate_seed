<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => '663380574-4',
        //     'email' => 'weerawat.so1@kkumail.com',
        //     'password' => Hash::make ('wordpass'),
        // ]);
        $this->call([
            ProductTypesTableSeeder::class,
            ProductsTableSeeder::class,
        ]);
    }
}
