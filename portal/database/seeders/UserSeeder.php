<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use DB;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $date_time = Carbon::now();
        $dateTime = $date_time->format('Y-m-d H:i:s');

        $superAdmin = User::where('email', 'super_admin@gmail.com')->where('type', 'super-admin')->get()->toArray();
        if (empty($superAdmin)) {
            DB::table('users')->insert([
                'name' => 'Super Admin',
                'email' => 'super_admin@gmail.com',
                'password' => bcrypt('xpat'),
                'type' => 'super-admin',
                'created_at' => $dateTime,
                'updated_at' => $dateTime,
            ]);
        }

        $admin = User::where('email', 'admin@gmail.com')->where('type', 'admin')->get()->toArray();
        if (empty($admin)) {
            DB::table('users')->insert([
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('xpat'),
                'type' => 'admin',
                'created_at' => $dateTime,
                'updated_at' => $dateTime,
            ]);
        }

        $visitor = User::where('email', 'visitor@gmail.com')->where('type', 'visitor')->get()->toArray();
        if (empty($visitor)) {
            $visitor = new User();
            $visitor->name = 'Visitor';
            $visitor->email = 'visitor@gmail.com';
            $visitor->password = bcrypt('xpat');
            $visitor->type = 'visitor';
            $visitor->created_at = $dateTime;
            $visitor->updated_at = $dateTime;
            $visitor->save();

            DB::table('visitors')->insert([
                'user_id' => $visitor->id,
                'country_id' => 174,
                'state_id' => 1309,
                'city_id' => 145027,
                'name' => 'Visitor',
                'address' => 'BedFord, UK',
                'mobile' => '+44925587128',
                'landline' => '+44927455522',
                'created_at' => $dateTime,
                'updated_at' => $dateTime,
            ]);

        }

        $agency = User::where('email', 'agency@gmail.com')->where('type', 'agency')->get()->toArray();
        if (empty($agency)) {
            $agency = new User();
            $agency->name = 'Agency';
            $agency->email = 'agency@gmail.com';
            $agency->password = bcrypt('xpat');
            $agency->type = 'agency';
            $agency->created_at = $dateTime;
            $agency->updated_at = $dateTime;
            $agency->save();

            DB::table('agencies')->insert([
                'user_id' => $agency->id,
                'country_id' => 103,
                'state_id' => 3939,
                'city_id' => 135026,
                'name' => 'Agency',
                'address' => 'BedFord, UK',
                'mobile' => '+44925587128',
                'landline' => '+44927455522',
                'homepage' => 'www.google.com',
                'created_at' => $dateTime,
                'updated_at' => $dateTime,
            ]);

        }

        $agent = User::where('email', 'agent@gmail.com')->where('type', 'agent')->get()->toArray();
        if (empty($agent)) {
            $agent = new User();
            $agent->name = 'Agent';
            $agent->email = 'agent@gmail.com';
            $agent->password = bcrypt('xpat');
            $agent->type = 'agent';
            $agent->created_at = $dateTime;
            $agent->updated_at = $dateTime;
            $agent->save();

            DB::table('agents')->insert([
                'user_id' => $agent->id,
                'country_id' => 233,
                'state_id' => 1409,
                'city_id' => 115017,
                'name' => 'Agent',
                'address' => 'BedFord, UK',
                'mobile' => '+44925587128',
                'landline' => '+44927455522',
                'created_at' => $dateTime,
                'updated_at' => $dateTime,
            ]);

        }

    }
}
