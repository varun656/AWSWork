<?php

namespace Database\Seeders;

use App\Libraries\LicenseTypes;
use App\Models\LicenseType;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class LicenseTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (LicenseTypes::Types as $index => $item) {
            $licenseType = LicenseType::where(['name' => $item])->first();
            if (empty($licenseType)) {
                $date_time = Carbon::now();
                $dateTime = $date_time->format('Y-m-d H:i:s');
                LicenseType::create(['name' => $item, 'created_at' => $dateTime, 'updated_at' => $dateTime]);
            }
        }
    }
}
