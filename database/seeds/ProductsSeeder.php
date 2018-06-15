<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Product::create([
            'name' => 'My first product',
            'quantity' => 500,
            'price' => '4.99'
        ]);
        error_log("A list has been created ");


    }
}
