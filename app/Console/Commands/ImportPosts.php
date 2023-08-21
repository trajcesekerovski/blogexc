<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use App\Models\Post;

class ImportPosts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:import-posts';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import posts from https://www.risklick.ch/api/v2/blogs';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $response = Http::get('https://www.risklick.ch/api/v2/posts');
        // $posts = json_decode($response);

        foreach($response['data'] as $p)
        {
            $post = new Post;
            $post->title = $p['title'];
            $post->body = $p['short_body'];
            $post->save();
        }

        return "Data is imported";
    }
}
