<?php

namespace App\Http\Controllers;

use App\Complaint;
use App\UmkmCategory;
use App\UmkmProduct;
use App\UmkmProfile;
use Illuminate\Http\Request;

class UmkmVisitorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = UmkmCategory::get();
        $products = UmkmProduct::filter(request(['search', 'category']))->latest()->get();
        // dd($products);
        // return $products;
        return view('visitors.umkm.index', compact('categories', 'products'));
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
