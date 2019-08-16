<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Tree;

class Branch extends Model
{
    public function tree(){
        return $this->belongsTo(Tree::class);
    }
}
