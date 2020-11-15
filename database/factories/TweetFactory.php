<?php

namespace Database\Factories;

use App\Models\Tweet;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * Class TweetFactory
 *
 * @package Database\Factories
 */
class TweetFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tweet::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'text' => $this->faker->text,
            'userName' => $this->faker->userName,
            'name' => $this->faker->name,
            'profileImage' => $this->faker->imageUrl(),
            'retweetCount' => $this->faker->randomNumber(),
            'replyCount' => $this->faker->randomNumber(),
            'favoriteCount' => $this->faker->randomNumber(),
            'date' => now(),
            'image' => $this->faker->imageUrl(),
        ];
    }
}
