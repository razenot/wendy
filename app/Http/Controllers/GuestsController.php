<?php

namespace App\Http\Controllers;

use App\Models\Guests;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreGuestsRequest;
use App\Http\Requests\UpdateGuestsRequest;

class GuestsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreGuestsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Guests $guests)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Guests $guests)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGuestsRequest $request, Guests $guests)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Guests $guests)
    {
        //
    }
}
