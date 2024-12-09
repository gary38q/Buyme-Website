<?php

namespace App\Http\Controllers;

use App\Models\hadiah;
use App\Http\Requests\StorehadiahRequest;
use App\Http\Requests\UpdatehadiahRequest;

class HadiahController extends Controller
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
     * @param  \App\Http\Requests\StorehadiahRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorehadiahRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\hadiah  $hadiah
     * @return \Illuminate\Http\Response
     */
    public function show(hadiah $hadiah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\hadiah  $hadiah
     * @return \Illuminate\Http\Response
     */
    public function edit(hadiah $hadiah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatehadiahRequest  $request
     * @param  \App\Models\hadiah  $hadiah
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatehadiahRequest $request, hadiah $hadiah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\hadiah  $hadiah
     * @return \Illuminate\Http\Response
     */
    public function destroy(hadiah $hadiah)
    {
        //
    }
}
