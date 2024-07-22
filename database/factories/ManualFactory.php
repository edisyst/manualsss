<?php

namespace Database\Factories;

use App\Models\Manual;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ManualFactory extends Factory
{
    protected $model = Manual::class;

    public function definition()
    {
        $title = $this->faker->realText(20);

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'content' => $this->faker->realText(500),
            'parent_id' => null,
        ];
    }

    public function withTitlePrefix($level)
    {
        return $this->state(function (array $attributes) use ($level) {
            $title = $this->faker->realText(20);

            return [
                'title' => $level . '-' . $title,
            ];
        });
    }
}
