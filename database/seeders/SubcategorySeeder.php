<?php

namespace Database\Seeders;

use App\Models\Product\Subcategory;
use Illuminate\Database\Seeder;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subcategories = [
            [
                'category_fk_id' => 1,
                'name' => 'men shalwar qamiz',
            ],
            [
                'category_fk_id' => 1,
                'name' => 'men kurta pajama',
            ],
            [
                'category_fk_id' => 2,
                'name' => 'women shalwar qamiz',
            ],
            [
                'category_fk_id' => 3,
                'name' => 'kids shalwar qamiz',
            ],
            [
                'category_fk_id' => 1,
                'name' => 'men suit',
            ],
            [
                'category_fk_id' => 3,
                'name' => 'kids suit',
            ],
            [
                'category_fk_id' => 3,
                'name' => 'kids wedding clothes',
            ],
            [
                'category_fk_id' => 2,
                'name' => 'women wedding special',
            ]
        ];

        foreach($subcategories as $subcategory)
        {
            $subcat = Subcategory::create($subcategory);
            $subcat->save();
        }
    }
}
