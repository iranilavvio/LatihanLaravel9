<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // $categories = ['Biographies', 'Bussiness', 'Comics', 'Computer&Tech', 'Education'];

        // foreach($categories as $item) {
        //     Category::create([
        //         'name' => $item
        //     ]);
        // }

           $attr = [
            [
                'name' => 'Arts&Music',
            ],
            [
                'name' => 'Biographies',
            ],
            [
                'name' => 'Comics',
            ],
            [
                'name' => 'Education',
            ],
            [
                'name' => 'Computer&Tech',
            ]
        ];

        \App\Models\Category::insert($attr); // insert multiple rows
        // \App\Models\Category::create($attr); // create one row
    }
}
