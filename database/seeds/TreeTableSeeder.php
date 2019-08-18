<?php

use Illuminate\Database\Seeder;
use \App\Models\Tree;

class TreeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Tree::class, 100)->create();
    }
}
