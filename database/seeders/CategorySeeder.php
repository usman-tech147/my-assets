<?php

namespace Database\Seeders;

use App\Models\Product\Category;
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
        $categories = [
            [
                'name' => 'men'
            ],
            [
                'name' => 'women'
            ],
            [
                'name' => 'kids'
            ]
        ];

        foreach($categories as $category)
        {
            $cat = Category::create($category);
            $cat->save();
        }
    }
}
