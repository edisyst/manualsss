<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Manual;
use Faker\Factory as Faker;

class ManualSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        // Create level 1 manuals
        $level1 = Manual::factory(10)->withTitlePrefix(1)->create();

        // Create level 2 manuals
        $level1->each(function ($manual) use ($faker) {
            $children = Manual::factory(5)->withTitlePrefix(2)->create(['parent_id' => $manual->id]);

            // Create level 3 manuals
            $children->each(function ($child) use ($faker) {
                $subChildren = Manual::factory(3)->withTitlePrefix(3)->create(['parent_id' => $child->id]);

                // Create level 4 manuals
                $subChildren->each(function ($subChild) use ($faker) {
                    Manual::factory(2)->withTitlePrefix(4)->create(['parent_id' => $subChild->id]);
                });
            });
        });
    }
}
