<?php

namespace Database\Factories;

use App\Models\Photo;
use App\Models\Race;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class PhotoFactory extends Factory
{
    protected $model = Photo::class;

    public function definition(): array
    {
        return [
            'filename' => $this->faker->word(),
            'size' => $this->faker->randomNumber(),
            'taken_at' => Carbon::now(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            'race_id' => Race::factory(),
        ];
    }
}
