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
                'category'=>'Junk Foods',
                'description'=>'This stands as the Junk Food category.'
            ],
            [
                'category'=>'Bar Soap',
                'description'=>'This stands as the Bar Soap category.'
            ],
            [
                'category'=>'Powder',
                'description'=>'This stands as the Powder category.'
            ],
            [
                'category'=>'Toothpaste',
                'description'=>'This stands as the Toothpaste category.'
            ],
            [
                'category'=>'Paracetamol',
                'description'=>'This stands as the Paracetamol category.'
            ],
        ];

        foreach($data as $categories) {
            \App\Category::create($categories);
        }
    }
}
