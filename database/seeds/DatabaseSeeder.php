<?php

use Illuminate\Database\Seeder;
use App\Models\Tree;
use App\Models\Branch;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TreeTableSeeder::class);
        $this->call(BranchTableSeeder::class);
    }
}
