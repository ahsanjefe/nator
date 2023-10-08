<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // \App\Models\s_10_user_databases::factory(10)->create();
        // \App\Models\s_20_user_tables::factory(5)->create();
        \App\Models\s_60_column_types::factory(5)->create();

    }
}
