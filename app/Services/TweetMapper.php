<?php


namespace App\Services;

/**
 * Class TweetMapper
 *
 * @package App\Services
 */
class TweetMapper
{
    /**
     * @param array $responseTweet
     * @return array
     */
    public static function responseToTweetArray(array $responseTweet): array
    {
        $tweetData = [
            'text' => $responseTweet['text'],
            'userName' => $responseTweet['user']['screen_name'],
            'name' => $responseTweet['user']['name'],
            'profileImage' => $responseTweet['user']['profile_image_url_https'],
            'retweetCount' => $responseTweet['retweet_count'],
            'replyCount' => $responseTweet['reply_count'],
            'favoriteCount' => $responseTweet['favorite_count'],
        ];

        if (isset($responseTweet['extended_tweet'])) {
            $tweetData['text'] = $responseTweet['extended_tweet']['full_text'];
        }

        if (isset($tweetData['created_at'])) {
            $tweetData['date'] = date("M d", strtotime($responseTweet['created_at']));
        }

        if (isset($tweetData['extended_entities']['media'][0]['media_url'])) {
            $tweetData['image'] = $responseTweet['extended_entities']['media'][0]['media_url'];
        }

        return $tweetData;
    }
}
