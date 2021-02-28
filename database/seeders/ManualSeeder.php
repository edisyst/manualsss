<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ManualSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\Manual::factory(6)->create();
    }
}
