<?php

namespace App\Http\Controllers;

use App\UmkmProduct;
use Illuminate\Http\Request;

class UmkmProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('dashboard.manajemen_umkm.produk.data-produk');
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
     * @param  \App\UmkmProduct  $umkmProduct
     * @return \Illuminate\Http\Response
     */
    public function show(UmkmProduct $umkmProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UmkmProduct  $umkmProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(UmkmProduct $umkmProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UmkmProduct  $umkmProduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UmkmProduct $umkmProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UmkmProduct  $umkmProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(UmkmProduct $umkmProduct)
    {
        //
    }
}
