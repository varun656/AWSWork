<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $path = base_path() . '/database/seeders/cities.sql';
        $sql = file_get_contents($path);
        DB::insert($sql);

    }
}
