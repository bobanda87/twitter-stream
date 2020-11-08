<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tweet
 *
 * @package App\Models
 */
class Tweet extends Model
{
    protected $fillable = [
        'id',
        'text',
        'userName',
        'name',
        'profileImage',
        'retweetCount',
        'replyCount',
        'favoriteCount',
        'date',
        'image'
    ];

}
