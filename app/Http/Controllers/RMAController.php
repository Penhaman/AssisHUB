<?php

namespace App\Http\Controllers;

use App\Models\RMA;
use App\Http\Requests\StoreRMARequest;
use App\Http\Requests\UpdateRMARequest;

class RMAController extends Controller
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
     * @param  \App\Http\Requests\StoreRMARequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRMARequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RMA  $rMA
     * @return \Illuminate\Http\Response
     */
    public function show(RMA $rMA)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RMA  $rMA
     * @return \Illuminate\Http\Response
     */
    public function edit(RMA $rMA)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRMARequest  $request
     * @param  \App\Models\RMA  $rMA
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRMARequest $request, RMA $rMA)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RMA  $rMA
     * @return \Illuminate\Http\Response
     */
    public function destroy(RMA $rMA)
    {
        //
    }
}
