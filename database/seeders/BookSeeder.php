<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'Do Epic Shit','author' => 'Ankur Warikoo','status' => 1,'created_at' => now()],
            ['name' => 'Almanck Of Naval Ravikant','author' => 'Geroge','status' => 1,'created_at' => now()],
            ['name' => 'Atomic Habits','author' => 'James Clear','status' => 1,'created_at' => now()],
            ['name' => 'Psychology Of Money','author' => 'Morgan Housel','status' => 1,'created_at' => now()],
            ['name' => 'Bhagwat Geeta','author' => 'Shree Krishna','status' => 1,'created_at' => now()],
            ['name' => 'Get Epic Shit Done','author' => 'Ankur Warikoo','status' => 1,'created_at' => now()]
        ];
        Book::insert($data);
    }
}
