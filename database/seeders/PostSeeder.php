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
            'paragraph' => 'Text for post 1.',
            'image_url' => 'Talkie.png',
            'active' => 'Y'
        ]);

        DB::table('posts')->insert([
            'title' => 'Post 2',
            'paragraph' => 'Text for post 2.',
            'image_url' => 'Rabbit.png',
            'active' => 'Y'
        ]);

        DB::table('posts')->insert([
            'title' => 'Post 3',
            'paragraph' => 'Text for post 3.',
            'image_url' => 'Shield.png',
            'active' => 'Y'
        ]);
    }
}
