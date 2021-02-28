<?php

namespace Database\Factories;

use App\Models\Chapter;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ChapterFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Chapter::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->firstNameMale; //la creo solo per ritrovarmi la stessa parola maiuscola nel testo
        return [
            'name' => $name,
            'body' => '<i>'.Str::upper($name).' '.$this->faker->realText.'</i>',
        ];
    }
}
