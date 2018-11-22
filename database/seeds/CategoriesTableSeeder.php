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
        DB::table('categories')->insert([
            'name' => 'Kategori 3',
            'description' => 'Deskripsi kategori 3',
        ]);
        DB::table('categories')->insert([
            'name' => 'Kategori 4',
            'description' => 'Deskripsi kategori 4',
        ]);
    }
}
