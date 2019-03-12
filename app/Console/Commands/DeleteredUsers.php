<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Auth;
use App\Post;
use Carbon;
class DeleteredUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'delete:posts';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
       \DB::table('posts')->where('created_at','<' ,\Carbon::today())->delete();
    }
}
