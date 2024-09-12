<?php

namespace App\Http\Controllers;

use App\Models\funding;
use App\Models\Funding as ModelsFunding;
use Illuminate\Http\Request;

class FundingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = [
            'status' => 'success',
            'massage'=> 'data Funding berhasil',
            'data'=> funding::all(),
        ];
        return response()->json($data);
        // return funding::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(funding $funding)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(funding $funding)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, funding $funding)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(funding $funding)
    {
        //
    }
}