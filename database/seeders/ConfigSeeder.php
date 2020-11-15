<?php

namespace Database\Seeders;

use App\Models\Config;
use Illuminate\Database\Seeder;

/**
 * Class ConfigSeeder
 */
class ConfigSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // These hashtags are selected for testing because they do have a lot of new Tweets coming in
        Config::create([
            'twitterHashtags' => '#trump,#biden',
            'twitterJobShouldRun' => 1
        ]);
    }
}
