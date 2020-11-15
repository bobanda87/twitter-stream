<?php

namespace Tests\Unit;

use App\Services\TweetMapper;
use PHPUnit\Framework\TestCase;

/**
 * Class TweetMapperTest
 *
 * @package Tests\Unit
 */
class TweetMapperTest extends TestCase
{
    /**
     * Test mapping of extended tweet text population
     *
     * @return void
     */
    public function testExtendedTweetTextPopulation()
    {
        $responseTweet = [
            'text' => 'Text',
            'user' => [
                'screen_name' => 'Test user',
                'name' => 'Test name',
                'profile_image_url_https' => ''
            ],
            'extended_tweet' => [
                'full_text' => 'Full text'
            ],
            'retweet_count' => 0,
            'reply_count' => 0,
            'favorite_count' => 0
        ];

        $tweet = TweetMapper::responseToTweetArray($responseTweet);
        $this->assertEquals($tweet['text'], $responseTweet['extended_tweet']['full_text']);
    }
}
