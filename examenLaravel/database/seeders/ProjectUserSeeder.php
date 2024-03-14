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
            'duracion' => 80,
        ]);

        DB::table('project_user')->insert([
            'project_id' => 1,
            'user_id' => 2,
            'duracion' => 95,
        ]);

        DB::table('project_user')->insert([
            'project_id' => 3,
            'user_id' => 1,
            'duracion' => 100,
        ]);

        DB::table('project_user')->insert([
            'project_id' => 4,
            'user_id' => 1,
            'duracion' => 15,
        ]);
        DB::table('project_user')->insert([
            'project_id' => 2,
            'user_id' => 5,
            'duracion' => 20,
        ]);

        DB::table('project_user')->insert([
            'project_id' => 2,
            'user_id' => 3,
            'duracion' => 30,
        ]);

        DB::table('project_user')->insert([
            'project_id' => 2,
            'user_id' => 4,
            'duracion' => 45,
        ]);

        DB::table('project_user')->insert([
            'project_id' => 5,
            'user_id' => 9,
            'duracion' => 120,
        ]);
        DB::table('project_user')->insert([
            'project_id' => 5,
            'user_id' => 8,
            'duracion' => 150,
        ]);
        DB::table('project_user')->insert([
            'project_id' => 5,
            'user_id' => 7,
            'duracion' => 5,
        ]);
        DB::table('project_user')->insert([
            'project_id' => 5,
            'user_id' => 2,
            'duracion' => 20,
        ]);
    }
}