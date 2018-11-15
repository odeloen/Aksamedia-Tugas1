<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
            'name' => 'Kategori 1',
            'description' => 'Deskripsi kategori 1',
        ]);
        DB::table('categories')->insert([
            'name' => 'Kategori 2',
            'description' => 'Deskripsi kategori 2',
        ]);
    }
}
