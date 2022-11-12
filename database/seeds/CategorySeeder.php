<?php

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
        $data = [
            [
                'category'=>'Noodles',
                'description'=>'This stands as the Noodles category.'
            ],
            [
                'category'=>'Surf Bar',
                'description'=>'This stands as the Surf Bar category.'
            ],
            [
                'category'=>'Tide Powder',
                'description'=>'This stands as the Tide Powder category.'
            ],
            [
                'category'=>'Can Goods',
                'description'=>'This stands as the Can Goods category.'
            ],

        ];

        foreach($data as $categories) {
            \App\Category::create($categories);
        }
    }
}
