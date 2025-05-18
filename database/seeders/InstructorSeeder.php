<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InstructorSeeder extends Seeder
{
    public function run()
    {
        DB::table('instructors')->insert([
            [
                'name' => 'Jane Smith',
                'specialization' => 'SAT Math & English',
                'experience' => 5,
                'rating' => 4.8,
                'reviews' => 150,
                'profile_picture' => 'https://example.com/jane.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'John Doe',
                'specialization' => 'SAT Writing',
                'experience' => 3,
                'rating' => 4.6,
                'reviews' => 120,
                'profile_picture' => 'https://example.com/john.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan data instruktur lainnya jika diperlukan
        ]);
    }
}
