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
                'brand_name'=>'Oishi',
                'product_name'=>'Crispy Patata Baked Potato Flavor 95g',
                'retail_price'=>'200.00',
                'wholesale_price'=>'8.00',
                'wholesale_qty'=>'1',
                'qty_stock'=>'100',
                'unit_id'=>'2',
                'category_id'=>'1'
            ],
            [
                'brand_name'=>'Lux',
                'product_name'=>'Lux Soft Touch 100g',
                'retail_price'=>'250.00',
                'wholesale_price'=>'25.00',
                'wholesale_qty'=>'1',
                'qty_stock'=>'25',
                'unit_id'=>'2',
                'category_id'=>'2'
            ],
            [
                'brand_name'=>'Wings',
                'product_name'=>'Wing total care with fabcon 70g',
                'retail_price'=>'48.00',
                'wholesale_price'=>'8.00',
                'wholesale_qty'=>'1',
                'qty_stock'=>'120',
                'unit_id'=>'2',
                'category_id'=>'3'
            ],
            [
                'brand_name'=>'Colgate',
                'product_name'=>'Colgate Maximum Cavity Protection 193g',
                'retail_price'=>'72.00',
                'wholesale_price'=>'8.00',
                'wholesale_qty'=>'1',
                'qty_stock'=>'12',
                'unit_id'=>'2',
                'category_id'=>'4'
            ],
            [
                'brand_name'=>'Biogesic',
                'product_name'=>'Paracetamol Biogesic 500mg Tablet',
                'retail_price'=>'90.00',
                'wholesale_price'=>'5.00',
                'wholesale_qty'=>'1',
                'qty_stock'=>'36',
                'unit_id'=>'2',
                'category_id'=>'5'
            ],


        ];

        foreach($data as $merchandises) {
            \App\Merchandise::create($merchandises);
        }
    }
}
