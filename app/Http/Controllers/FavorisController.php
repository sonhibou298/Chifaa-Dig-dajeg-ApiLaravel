<?php

namespace App\Http\Controllers;

use App\Models\Favoris;
use App\Http\Requests\StoreFavorisRequest;
use App\Http\Requests\UpdateFavorisRequest;

class FavorisController extends Controller
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
     * @param  \App\Http\Requests\StoreFavorisRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFavorisRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Favoris  $favoris
     * @return \Illuminate\Http\Response
     */
    public function show(Favoris $favoris)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Favoris  $favoris
     * @return \Illuminate\Http\Response
     */
    public function edit(Favoris $favoris)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFavorisRequest  $request
     * @param  \App\Models\Favoris  $favoris
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFavorisRequest $request, Favoris $favoris)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Favoris  $favoris
     * @return \Illuminate\Http\Response
     */
    public function destroy(Favoris $favoris)
    {
        //
    }
}
