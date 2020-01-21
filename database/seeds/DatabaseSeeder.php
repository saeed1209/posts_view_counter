<?php

use App\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        Post::create([
            'title' => 'first post',
            'description' => 'sfdsgdfhgfhfdhgf dgdfghfhfd fgdfgdfgdfgdfgdfg dfgdfg dgdgdfdfg  dfgdfgdf'
        ]);

        Post::create([
            'title' => 'second post',
            'description' => 'sfdsgdfhgfhfdhgf dgdfghfhfd fgdfgdfgdfgdfgdfg dfgdfg dgdgdfdfg  dfgdfgdf'
        ]);

        Post::create([
            'title' => 'third post',
            'description' => 'sfdsgdfhgfhfdhgf dgdfghfhfd fgdfgdfgdfgdfgdfg dfgdfg dgdgdfdfg  dfgdfgdf'
        ]);

        Post::create([
            'title' => 'forth post',
            'description' => 'sfdsgdfhgfhfdhgf dgdfghfhfd fgdfgdfgdfgdfgdfg dfgdfg dgdgdfdfg  dfgdfgdf'
        ]);

        Post::create([
            'title' => 'fifth post',
            'description' => 'sfdsgdfhgfhfdhgf dgdfghfhfd fgdfgdfgdfgdfgdfg dfgdfg dgdgdfdfg  dfgdfgdf'
        ]);
    }
}
