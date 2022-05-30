<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
//        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS=0');

        \App\Models\Manual::truncate();
        \App\Models\Chapter::truncate();

        $this->call([
            ManualSeeder::class,
            ChapterSeeder::class,
        ]);

        // \App\Models\User::factory(10)->create();
        $this->call(ManualsTableSeeder::class);
    }
}
