<?php

namespace Database\Factories;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    protected $model = Event::class;

    public function definition(): array
    {
        return [
            'name' => fake()->words(3, true),
            'date' => fake()->date(),
            'time' => fake()->time('H:i'),
            'place' => fake()->streetAddress(),
            'description' => fake()->paragraph(),
        ];
    }
}
