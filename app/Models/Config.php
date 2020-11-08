<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Config
 *
 * @package App\Models
 */
class Config extends Model
{
    protected $fillable = [
        'twitterHashtags',
        'twitterJobShouldRun'
    ];

    /**
     * @return array
     */
    public static function getHashtagsArray(): array
    {
        if ($config = Config::all()->first()) {
            return explode(',', $config->twitterHashtags);
        }

        return array();
    }

    /**
     * @return bool
     */
    public static function getTwitterJobShouldRun(): bool
    {
        if ($config = Config::all()->first()) {
            return (bool) $config->twitterJobShouldRun;
        }

        return true;
    }
}
