<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubCatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subcategory::create([
            'category_id'=> 1,
            'name'=>'Man sub cat 1',
            'slug'=>'Man sub cat 1'

        ]);
        Subcategory::create([
            'category_id'=> 1,
            'name'=>'Man sub cat 2',
            'slug'=>'Man sub cat 2'

        ]);
        Subcategory::create([
            'category_id'=> 1,
            'name'=>'Man sub cat 3',
            'slug'=>'Man sub cat 3'

        ]);

        //2

        Subcategory::create([
            'category_id'=> 2,
            'name'=>'Women sub cat 1',
            'slug'=>'Women sub cat 1'

        ]);
        Subcategory::create([
            'category_id'=> 2,
            'name'=>'Women sub cat 2',
            'slug'=>'Women sub cat 2'

        ]);
        Subcategory::create([
            'category_id'=> 2,
            'name'=>'Women sub cat 3',
            'slug'=>'Women sub cat 3'

        ]);

        //3

        Subcategory::create([
            'category_id'=> 3,
            'name'=>'Child sub cat 1',
            'slug'=>'Child sub cat 1'

        ]);
        Subcategory::create([
            'category_id'=> 3,
            'name'=>'Child sub cat 2',
            'slug'=>'Child sub cat 2'

        ]);
        Subcategory::create([
            'category_id'=> 3,
            'name'=>'Child sub cat 3',
            'slug'=>'Child sub cat 3'

        ]);
    }
}
