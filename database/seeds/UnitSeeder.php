<?php

use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
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
                'unit_type'=>'milligram(s)',
                'description'=>'This stands as the milligram unit.'
            ],
            [
                'unit_type'=>'kilogram(s)',
                'description'=>'This stands as the kilogram unit.'
            ],
            [
                'unit_type'=>'gram(s)',
                'description'=>'This stands as the gram unit.'
            ],


        ];

        foreach($data as $units) {
            \App\Unit::create($units);
        }
    }
}
