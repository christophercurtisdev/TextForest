<?php

namespace App\Http\Controllers\Api;

use App\Models\Branch;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\BranchResource;
use App\Http\Resources\BranchResourceCollection;

class BranchApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new BranchResourceCollection(Branch::paginate());
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
            'body' => 'required',
            'tree_id' => 'required',
        ]);

        $branch = Branch::create($valid);

        return new BranchResource($branch);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Branch  $branch
     * @return BranchResource
     */
    public function show(Branch $branch): BranchResource
    {
        return new BranchResource($branch);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Branch $branch): BranchResource
    {
        $branch->body = $request->body ? $request->body : $branch->body;
        $branch->save();
        return new BranchResource($branch);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function destroy(Branch $branch)
    {
        //
    }
}
