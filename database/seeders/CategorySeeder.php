<?php

namespace Database\Seeders;

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
            Product::factory()->count(5)->sequence(fn ($sequence) => ['name' => 'Product '.$sequence->index])
        )->create();
    }
}
