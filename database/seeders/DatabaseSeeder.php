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
            'name' => 'Unassigned'
        ]);
        DB::table('issue_statuses')->insert([
            'name' => 'Backlog'
        ]);

        // Seeding 4 issues, project_id will be random
        Issue::factory(4)
                ->create();
    }
}
