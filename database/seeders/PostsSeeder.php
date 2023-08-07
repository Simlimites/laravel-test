<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $posts = Http::get('https://jsonplaceholder.typicode.com/posts');

        if($posts->ok()) {
            DB::table('posts')
                ->insert($posts->json());
        }
    }
}
