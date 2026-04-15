<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('authors')->insert([
            [
                'name' => 'J.K. Rowling',
                'country' => 'United Kingdom'
            ],
            [
                'name' => 'George R.R. Martin',
                'country' => 'United States'
            ],
            [
                'name' => 'Haruki Murakami',
                'country' => 'Japan'
            ]
        ]);
    }
}
