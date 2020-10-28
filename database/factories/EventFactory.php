<?php

namespace Database\Factories;

use App\Models\Event;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Event::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {   
        $categories = Category::all();

        return [
            'title' => $this->faker->unique()->words(2, true),
            'category_id' => $this->faker->randomElement($categories),
            'description' => $this->faker->text,
            'link' => $this->faker->url,
            'begin_at' => $this->faker->dateTimeBetween('-3 months', '+3 months', null),
            'end_at' => $this->faker->dateTimeBetween('now', '+1 year', null),
            'price' => $this->faker->randomFloat(NULL, 100, 15000),
            'count_subscriber' => $this->faker->numberBetween(0,100),
            'address' => $this->faker->address,

        ];
    }
}
