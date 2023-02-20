<?php

namespace Database\Seeders;

use App\Libraries\Categories;
use App\Models\Category;
use App\Models\Subcategory;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (Categories::CATEGORIES as $index => $item) {
            $category = Category::where(['name' => $item])->first();
            if (empty($category)) {
                $date_time = Carbon::now();
                $dateTime = $date_time->format('Y-m-d H:i:s');
                Category::create(['name' => $item, 'created_at' => $dateTime, 'updated_at' => $dateTime]);
            }
        }

        foreach (Categories::SUBCATEGORIES as $index => $item) {
            $category = Category::where(['name' => $index])->first();

            if (!empty($category)) {
                foreach ($item as $i) {

                    $date_time = Carbon::now();
                    $dateTime = $date_time->format('Y-m-d H:i:s');
                    Subcategory::create(['name' => $i, 'category_id' => $category['id'], 'created_at' => $dateTime, 'updated_at' => $dateTime]);
                }
            }

        }

    }
}
