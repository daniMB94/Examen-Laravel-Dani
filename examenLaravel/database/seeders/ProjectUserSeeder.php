<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('project_user')->insert([
            'project_id' => 1,
            'user_id' => 1,
        ]);

        DB::table('project_user')->insert([
            'project_id' => 1,
            'user_id' => 2,
        ]);

        DB::table('project_user')->insert([
            'project_id' => 3,
            'user_id' => 1,
        ]);

        DB::table('project_user')->insert([
            'project_id' => 4,
            'user_id' => 1,
        ]);
        DB::table('project_user')->insert([
            'project_id' => 2,
            'user_id' => 5,
        ]);

        DB::table('project_user')->insert([
            'project_id' => 2,
            'user_id' => 3,
        ]);

        DB::table('project_user')->insert([
            'project_id' => 2,
            'user_id' => 4,
        ]);

        DB::table('project_user')->insert([
            'project_id' => 5,
            'user_id' => 9,
        ]);
        DB::table('project_user')->insert([
            'project_id' => 5,
            'user_id' => 8,
        ]);
        DB::table('project_user')->insert([
            'project_id' => 5,
            'user_id' => 7,
        ]);
        DB::table('project_user')->insert([
            'project_id' => 5,
            'user_id' => 2,
        ]);
    }
}