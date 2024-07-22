<?php

namespace Database\Factories;

use App\Models\Chapter;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ChapterFactory extends Factory
{
    protected $model = Chapter::class;

    public function definition()
    {
        $name = $this->faker->firstNameMale; //la creo solo per ritrovarmi la stessa parola maiuscola nel testo
        return [
            'name' => $name,
            'body' => '<br><i>'.Str::upper($name).'<br>'.$this->faker->realText(500).'</i>',
        ];
    }
}
