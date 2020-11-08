<?php

namespace App\Console\Commands;

use App\Exceptions\PreventTwitterJobFromRunning;
use App\Models\Config;
use App\Models\Tweet;
use App\Services\TweetMapper;
use Illuminate\Console\Command;
use TwitterStreamingApi;

/**
 * Class ProcessTweetsCommand
 *
 * @package App\Console\Commands
 */
class ProcessTweetsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tweets:process';

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
     * @return void
     * @throws PreventTwitterJobFromRunning
     */
    public function handle()
    {
        $hashtags = Config::getHashtagsArray();

        TwitterStreamingApi::publicStream()
            ->whenHears($hashtags, function(array $tweet) {
                if (!Config::getTwitterJobShouldRun()) {
                    throw new PreventTwitterJobFromRunning('Listening Twitter stream is disabled.');
                }

                $tweet = TweetMapper::responseToTweetArray($tweet);
                Tweet::create($tweet);
                $this->info("Successfully imported " . $tweet['text']);
            })
            ->startListening();
    }
}
