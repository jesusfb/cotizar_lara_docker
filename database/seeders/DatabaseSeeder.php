<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
     public function run(): void
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
           'email' => 'lgjj1995@gmail.com',
           'email_verified_at'=>'2024-10-02',
           'password'=>'8TW3ydxpieqySxe'
      ]);
    } 
}
