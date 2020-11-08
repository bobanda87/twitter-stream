<?php

namespace App\Http\Resources;

/**
 * Class TweetResource
 *
 * @package App\Http\Resources
 */
class TweetResource extends BaseResource
{
    /**
     * @param $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'text' => $this->text,
            'userName' => $this->userName,
            'name' => $this->name,
            'profileImage' => $this->profileImage,
            'retweetCount' => $this->retweetCount,
            'replyCount' => $this->replyCount,
            'favoriteCount' => $this->favoriteCount,
            'date' => $this->date,
            'image' => $this->image
        ];
    }
}
