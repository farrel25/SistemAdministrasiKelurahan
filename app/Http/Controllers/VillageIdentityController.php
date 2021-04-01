<?php

namespace App\Http\Controllers;

use App\VillageIdentity;
use Illuminate\Http\Request;

class VillageIdentityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $villageIdentity = VillageIdentity::first();
        // return $villageIdentity;
        return view('dashboard.info_kelurahan.identitas_kelurahan.identitas', compact('villageIdentity'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\VillageIdentity  $villageIdentity
     * @return \Illuminate\Http\Response
     */
    public function show(VillageIdentity $villageIdentity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\VillageIdentity  $villageIdentity
     * @return \Illuminate\Http\Response
     */
    public function edit(VillageIdentity $villageIdentity)
    {
        return view('dashboard.info_kelurahan.identitas_kelurahan.identitas-edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\VillageIdentity  $villageIdentity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VillageIdentity $villageIdentity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\VillageIdentity  $villageIdentity
     * @return \Illuminate\Http\Response
     */
    public function destroy(VillageIdentity $villageIdentity)
    {
        //
    }
}
