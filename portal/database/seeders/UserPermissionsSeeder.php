<?php

namespace Database\Seeders;

use App\Libraries\PermissionsData;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class UserPermissionsSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('permissions')->truncate();
        DB::table('model_has_permissions')->truncate();
        DB::table('role_has_permissions')->truncate();
        DB::table('model_has_roles')->truncate();
        DB::table('roles')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        //   Role::query()->truncate();
        foreach (PermissionsData::ROLES as $index => $item) {
            $role = Role::where(['name' => $item])->first();
            if (empty($role)) {
                $date_time = Carbon::now();
                $dateTime = $date_time->format('Y-m-d H:i:s');
                Role::create(['name' => $item, 'guard_name' => 'api', 'created_at' => $dateTime, 'updated_at' => $dateTime]);
            }
        }

        // foreach (PermissionsData::PERMISSIONS as $index => $item) {
        //     $permission = Permission::where(['name' => $item])->first();
        //     if (empty($permissions)) {
        //         $date_time = Carbon::now();
        //         $dateTime = $date_time->format('Y-m-d H:i:s');

        //         Permission::create(['name' => $item, 'guard_name' => 'api', 'created_at' => $dateTime, 'updated_at' => $dateTime]);
        //     }
        // }

        // $users = User::where('id', '!=', 0)->get();
        // foreach ($users as $user) {
        //     foreach (PermissionsData::PERMISSIONS[$user->type] as $index => $item) {
        //         foreach ($item as $permissionItemIndex => $permissionItem) {

        //         }
        //     }
        // }

    }
}
