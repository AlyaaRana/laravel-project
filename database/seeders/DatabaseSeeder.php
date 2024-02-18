<?php

namespace Database\Seeders;

use App\Models\Kelas; // Import the missing class

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Student::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Kelas::create([
            'nama' => '10 RPL 1',
        ]);
        Kelas::create([
            'nama' => '10 RPL 2',
        ]);
        Kelas::create([
            'nama' => '11 RPL 1',
        ]);
        Kelas::create([
            'nama' => '11 RPL 2',
        ]);
        Kelas::create([
            'nama' => '12 RPL 1',
        ]);
        Kelas::create([
            'nama' => '12 RPL 2',
        ]);
        
    }
}
