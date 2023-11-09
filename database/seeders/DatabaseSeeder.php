<?php

namespace Database\Seeders;

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
        \App\Models\User::factory(10)->create();
        // \App\Models\Address::factory(5)->create();
        // \App\Models\TpsCoordinate::factory(5)->create();
        // \App\Models\Volunteer::factory(100)->create();

        $this->call(VolunteerSeeder::class);



        \App\Models\User::factory()->create([
            'name' => 'Administrator',
            'username' => 'admi',
            'password' => Hash::make('admin'),
        ]);
    }
}
