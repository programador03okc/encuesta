<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->truncateTables([
            'users',
            'competitors'
        ]);

        $this->call(UserSeeder::class);
        $this->call(CompetitorSeeder::class);
    }

    /*
        Function to empty the tables
        Only for tables that go into migration
    */
    protected function truncateTables(array $tables)
    {
        foreach ($tables as $table)
        {
    		DB::table($table)->truncate();
    	}
    }

}
