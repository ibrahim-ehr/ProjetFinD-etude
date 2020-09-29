<?php

use App\Comment;
use Illuminate\Database\Seeder;


class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comment::create([
            'body'=>'slm',
            'user_id'=>4,
            'article_id'=>1
        ]);
        Comment::create([
            'body'=>'slm',
            'user_id'=>1,
            'article_id'=>2
        ]);
        Comment::create([
            'body'=>'slm',
            'user_id'=>2,
            'article_id'=>4
        ]);
        Comment::create([
            'body'=>'slm',
            'user_id'=>3,
            'article_id'=>3
        ]);
    }
}
