<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            'category_id' => '1',
            'name' => 'Produk 1',
            'description' => 'Deskripsi produk 1',            
        ]);

        DB::table('products')->insert([
            'category_id' => '1',
            'name' => 'Produk 2',
            'description' => 'Deskripsi produk 2',
            'price' => '1239812778',
        ]);

        DB::table('products')->insert([
            'category_id' => '2',
            'name' => 'Produk 3',
            'description' => 'Deskripsi produk 3',
        ]);

        DB::table('products')->insert([
            'category_id' => '2',
            'name' => 'Produk 3',
            'description' => 'Deskripsi produk 3',
            'price' => '98712973',
        ]);
    }
}
