<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Post;
use Illuminate\Support\Facades\File;

class ImportPosts extends Command
{
    protected $signature = 'import:posts';
    protected $description = 'Import posts data from JSON file';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $json = File::get(public_path('posts_backup.json'));
        $posts = json_decode($json, true);

        foreach ($posts as $index => $post) {
            $post['id'] = $index + 1;
            Post::create($post);
        }

        $this->info('Posts data imported from posts_backup.json');
    }
}
