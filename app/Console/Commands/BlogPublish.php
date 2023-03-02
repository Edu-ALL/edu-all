<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\Admin\Blog as Blog;
use Illuminate\Support\Facades\Log;

class BlogPublish extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'check:blog_publish';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'check blog publish';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        (new Blog)->checkPublish();
        Log::info('blog publis is running');
        return Command::SUCCESS;
    }
}
