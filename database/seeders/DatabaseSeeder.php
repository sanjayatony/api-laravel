<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(1)->create([
        	'name' => "Eren Jaeger",
        	'email' => "eren@kyojin.com",
        	'password' => Hash::make('password'),
        	'email_verified_at' => null
        ]);
    }
}
