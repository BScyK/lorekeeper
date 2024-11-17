<?php

namespace App\Console\Commands;

<<<<<<< HEAD
use App\Models\Comment\Comment;
use Illuminate\Console\Command;

class UpdateCommentTypes extends Command {
=======
use App\Models\Comment;
use Illuminate\Console\Command;

class UpdateCommentTypes extends Command
{
>>>>>>> 40004c366c26637c703cd497a00681348f4783a9
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update-comment-types';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Updates comment types.';

    /**
     * Create a new command instance.
<<<<<<< HEAD
     */
    public function __construct() {
=======
     *
     * @return void
     */
    public function __construct()
    {
>>>>>>> 40004c366c26637c703cd497a00681348f4783a9
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
<<<<<<< HEAD
    public function handle() {
        $comments = Comment::where('commentable_type', 'App\Models\Report\Report')->where('type', 'User-User');

        if ($comments->count()) {
            $this->line('Updating comment types...');
            $comments->update(['type' => 'Staff-User']);
            $this->info('Comment types updated!');
        } else {
            $this->line('No comments need updating!');
=======
    public function handle()
    {
        $comments = Comment::where('commentable_type', 'App\Models\Report\Report')->where('type', 'User-User');

        if($comments->count()) {
            $this->line('Updating comment types...');
            $comments->update(['type' => 'Staff-User']);
        } else {
            $this->info('No comments to update!');
>>>>>>> 40004c366c26637c703cd497a00681348f4783a9
        }

        return 0;
    }
}
