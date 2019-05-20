<?php

use Illuminate\Database\Seeder;

class LinksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // con los datos demo que genere 5 duplas
        factory(App\link::class, 5)->create();
    }
}
