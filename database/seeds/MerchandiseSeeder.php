<?php

use Illuminate\Database\Seeder;

class MerchandiseSeeder extends Seeder
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
                'brand_name'=>'Lucky me',
                'product_name'=>'Hot and Spicy',
                'retail_price'=>'14.00',
                'wholesale_price'=>'14.00',
                'wholesale_qty'=>'1',
                'qty_stock'=>'100',
                'unit_id'=>'2',
                'category_id'=>'1'
            ],
            [
                'brand_name'=>'Surf',
                'product_name'=>'Surf Bar',
                'retail_price'=>'10.00',
                'wholesale_price'=>'5.00',
                'wholesale_qty'=>'1',
                'qty_stock'=>'25',
                'unit_id'=>'2',
                'category_id'=>'2'
            ],
            [
                'brand_name'=>'Tide',
                'product_name'=>'Tide powder',
                'retail_price'=>'20.00',
                'wholesale_price'=>'10.00',
                'wholesale_qty'=>'1',
                'qty_stock'=>'120',
                'unit_id'=>'2',
                'category_id'=>'3'
            ],
            [
                'brand_name'=>'Sardines',
                'product_name'=>'sweet and sour flavor',
                'retail_price'=>'35.00',
                'wholesale_price'=>'10.00',
                'wholesale_qty'=>'1',
                'qty_stock'=>'12',
                'unit_id'=>'2',
                'category_id'=>'4'
            ],


        ];

        foreach($data as $merchandises) {
            \App\Merchandise::create($merchandises);
        }
    }
}
