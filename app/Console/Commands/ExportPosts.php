<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Post;
use Illuminate\Support\Facades\File;

class ExportPosts extends Command
{
    protected $signature = 'export:posts';
    protected $description = 'Export posts data to JSON file';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $posts = Post::all()->toArray();
        $json = json_encode($posts, JSON_PRETTY_PRINT);
        File::put(public_path('posts_backup.json'), $json);
        $this->info('Posts data exported to posts_backup.json');
    }
}
