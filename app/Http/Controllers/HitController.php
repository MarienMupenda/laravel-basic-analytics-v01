<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHitRequest;
use App\Http\Requests\UpdateHitRequest;
use App\Models\Hit;

class HitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreHitRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHitRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hit  $hit
     * @return \Illuminate\Http\Response
     */
    public function show(Hit $hit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hit  $hit
     * @return \Illuminate\Http\Response
     */
    public function edit(Hit $hit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHitRequest  $request
     * @param  \App\Models\Hit  $hit
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHitRequest $request, Hit $hit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hit  $hit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hit $hit)
    {
        //
    }
}
