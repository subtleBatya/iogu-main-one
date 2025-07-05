<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Sport;

class SportFactory extends Factory
{
    protected $model = Sport::class;

    public function definition()
    {
        return [
            'title_en' => $this->faker->sentence(),
            'title_ru' => $this->faker->sentence(),
            'title_tm' => $this->faker->sentence(),
            'content_en' => $this->faker->paragraph(),
            'content_ru' => $this->faker->paragraph(),
            'content_tm' => $this->faker->paragraph(),
            'images' => null,
            'files' => null,
        ];
    }
}
