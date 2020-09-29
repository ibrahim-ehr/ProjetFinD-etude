<?php

use App\Article;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::create([
            'title'=>'brahim',
            'slug'=>Str::slug('a simple title'),
            'body'=>'vefnbkrnvlme,rvpornbiotnboztbnkztnblznbionvlrnbt urhgirehg ihigherog erigherg rgierhg.',
            'image'=>'p1.jpg',
            'user_id'=>1,
        ]);
        Article::create([
            'title'=>'walid',
            'slug'=>Str::slug('a simple title'),
            'body'=>'vefnbkrnvlme,rvpornxxxszbiotnboztbnkztnblznbionvlrnbt urhgirehg ihigherog erigherg rgierhg.',
            'image'=>'p2.jpg',
            'user_id'=>3,
        ]);
        Article::create([
            'title'=>'moh',
            'slug'=>Str::slug('a simple title'),
            'body'=>'vefnbkrceceznvlme,rvpornbiotnboztbnkztnblznbionvlrnbt urhgirehg ihigherog erigherg rgierhg.',
            'image'=>'p3.jpg',
            'user_id'=>1,
        ]);
        Article::create([
            'title'=>'khalil',
            'slug'=>Str::slug('a simple title'),
            'body'=>'vefnbkrnvlmececec,rvpornbiotnboztbnkztnblznbionvlrnbt urhgirehg ihigherog erigherg rgierhg.',
            'image'=>'p4.jpg',
            'user_id'=>2,
        ]);
    }
}
