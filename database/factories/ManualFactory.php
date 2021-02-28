<?php

namespace Database\Factories;

use App\Models\Manual;
use Illuminate\Database\Eloquent\Factories\Factory;

class ManualFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Manual::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'   => $this->faker->company,
            'content' => '<b>'.$this->faker->realText.'<br>'.$this->faker->realText.'<br>'.$this->faker->realText.'<br>'.$this->faker->realText.'</b>',

        ];
    }
}
