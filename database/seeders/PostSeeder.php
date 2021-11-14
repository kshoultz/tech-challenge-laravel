<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title' => 'Post 1',
            'paragraph' => 'Text for post 1.'
        ]);

        DB::table('posts')->insert([
            'title' => 'Post 2',
            'paragraph' => 'Text for post 2.'
        ]);

        DB::table('posts')->insert([
            'title' => 'Post 3',
            'paragraph' => 'Text for post 3.'
        ]);
    }
}
