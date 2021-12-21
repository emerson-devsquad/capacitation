<?php

namespace Database\Seeders;

use App\Models\Advertisement;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::factory(6)
        ->sequence(fn ($sequence) => ['name' => 'Category '.$sequence->index])
        ->has(
            Advertisement::factory()->count(5)->sequence(fn ($sequence) => ['title' => 'Advertisement '.$sequence->index])
        )->create();
    }
}
