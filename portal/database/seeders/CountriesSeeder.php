<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $path = base_path() . '/database/seeders/countries.sql';
        $sql = file_get_contents($path);
        DB::insert($sql);

        // DB::unprepared($sql);
    }
}
