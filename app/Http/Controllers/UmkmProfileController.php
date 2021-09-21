<?php

namespace App\Http\Controllers;

use App\UmkmProfile;
use Illuminate\Http\Request;

class UmkmProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('dashboard.manajemen_umkm.penjual.data-penjual');
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
     * @param  \App\UmkmProfile  $umkmProfile
     * @return \Illuminate\Http\Response
     */
    public function show(UmkmProfile $umkmProfile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UmkmProfile  $umkmProfile
     * @return \Illuminate\Http\Response
     */
    public function edit(UmkmProfile $umkmProfile)
    {

        // return view('dashboard.manajemen_umkm.penjual.penjual'/*, compact('articleCategory')*/);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UmkmProfile  $umkmProfile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UmkmProfile $umkmProfile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UmkmProfile  $umkmProfile
     * @return \Illuminate\Http\Response
     */
    public function destroy(UmkmProfile $umkmProfile)
    {
        //
    }
}