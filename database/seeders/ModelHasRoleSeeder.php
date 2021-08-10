<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModelHasRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('model_has_roles')->insert([
            [
                'role_id' => 2,
                'model_type' => 'App/Models/User',
                'model_id' => 1,
            ],
            [
                'role_id' => 2,
                'model_type' => 'App/Models/User',
                'model_id' => 2,
            ],
        ]);
    }
}