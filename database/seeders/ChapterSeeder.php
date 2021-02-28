<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Chapter;
use Illuminate\Support\Str;

class ChapterSeeder extends Seeder
{

    public function run()
    {
//        $chapters = ['nature', 'animals', 'cats', 'business', ];
//
//        foreach ($chapters as $item) {
//            Chapter::create([
//                'name' => $item,
//                'body' => Str::upper($item.' '.$item.' '.$item.' '.$item.' '.$item.' '.$item.' '),
//            ]);
//        }

        \App\Models\Chapter::factory(4)->create();

    }
}
