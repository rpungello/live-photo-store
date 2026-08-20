<?php

namespace Database\Factories;

use App\Models\Event;
use App\Models\Race;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class RaceFactory extends Factory
{
    protected $model = Race::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'code' => $this->faker->word(),
            'time' => Carbon::now(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            'event_id' => Event::factory(),
        ];
    }
}
