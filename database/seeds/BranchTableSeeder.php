<?php

use Illuminate\Database\Seeder;
use \App\Models\Tree;
use \App\Models\Branch;

class BranchTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for($i = 1; $i < 101; $i++){
            $tree = Tree::find($i);

            Branch::create([
            'body' => "The first branch of a tree",
            'tree_id' => $tree->id,
            'parent_branch_id' => null,
            ]);
        }

        factory(Branch::class, 100)->create();
    }
}
