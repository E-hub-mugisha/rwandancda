<?php

namespace Database\Seeders;

use CarouselItemsTableSeeder;
use Database\Seeders\CarouselItemsTableSeeder as SeedersCarouselItemsTableSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SeedersCarouselItemsTableSeeder::class);
    }
}
