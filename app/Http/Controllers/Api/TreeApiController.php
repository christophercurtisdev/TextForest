<?php

namespace App\Http\Controllers\Api;

use App\Models\Tree;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\TreeResource;
use App\Http\Resources\TreeResourceCollection;

class TreeApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): TreeResourceCollection
    {
        return new TreeResourceCollection(Tree::paginate());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $valid = $request->validate([
            'title' => 'required',
        ]);

        $tree = Tree::create($valid);

        return new TreeResource($tree);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tree  $tree
     * @return \Illuminate\Http\Response
     */
    public function show(Tree $tree)
    {
        return new TreeResource($tree);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tree  $tree
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tree $tree): TreeResource
    {
        $tree->title = $request->title ? $request->title : $tree->title;
        $tree->save();
        return new TreeResource($tree);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tree  $tree
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tree $tree)
    {
        $tree->delete();

        return response()->json();
    }
}
