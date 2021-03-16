<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Issue;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Seeding 1st user with 2 project
        User::factory(1)
            ->hasProjects(2)
            ->create();

        // Seed issue statuses
        DB::table('issue_statuses')->insert([
            'name' => 'Backlog'
        ]);
        DB::table('issue_statuses')->insert([
            'name' => 'To Do'
        ]);
        DB::table('issue_statuses')->insert([
            'name' => 'In Progress'
        ]);
        DB::table('issue_statuses')->insert([
            'name' => 'Testing'
        ]);
        DB::table('issue_statuses')->insert([
            'name' => 'Completed'
        ]);

        // Seeding 8 issues, project_id will be random
        Issue::factory(8)
            ->create();
    }
}
