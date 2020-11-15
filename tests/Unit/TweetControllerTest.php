<?php

namespace Tests\Unit;

use App\Models\Tweet;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * Class TweetControllerTest
 *
 * @package Tests\Unit
 */
class TweetControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test listing tweets
     *
     * @return void
     */
    public function testTweetsList()
    {
        Tweet::factory()->count(7)->create();

        $response = $this->getJson('/api/tweets');

        $responseData = json_decode($response->getContent());

        $this->assertCount(7, $responseData);
    }
}
