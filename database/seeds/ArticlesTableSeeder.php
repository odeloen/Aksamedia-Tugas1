<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('articles')->insert([
            'title' => 'Article 1 Title',
            'body' => 'Deskripsi artikel 1',
        ]);

        DB::table('articles')->insert([
            'title' => 'Article 2 Title',
            'body' => 'Deskripsi artikel 2',
        ]);

        DB::table('articles')->insert([
            'title' => 'Article 3 Title',
            'body' => 'Deskripsi artikel 3',
        ]);

        DB::table('articles')->insert([
            'title' => 'Article 4 Title',
            'body' => 'Deskripsi artikel 4',
        ]);

        DB::table('articles')->insert([
            'title' => 'Article 5 Title',
            'body' => 'Deskripsi artikel 1',
        ]);

        DB::table('articles')->insert([
            'title' => 'Article 6 Title',
            'body' => 'Deskripsi artikel 6',
        ]);
    }
}
