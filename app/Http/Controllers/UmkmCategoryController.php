<?php

namespace App\Http\Controllers;

use App\UmkmCategory;
use Illuminate\Http\Request;

class UmkmCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('dashboard.manajemen_umkm.kategori.kategori');
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
     * @param  \App\UmkmCategory  $umkmCategory
     * @return \Illuminate\Http\Response
     */
    public function show(UmkmCategory $umkmCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UmkmCategory  $umkmCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(UmkmCategory $umkmCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UmkmCategory  $umkmCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UmkmCategory $umkmCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UmkmCategory  $umkmCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(UmkmCategory $umkmCategory)
    {
        //
    }
}
