<?php

namespace App\Http\Controllers;

use App\LetterType;
use Illuminate\Http\Request;

class LetterPrintController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $letterTypes = LetterType::get();
        return view('dashboard.manajemen_surat.cetak_surat.cetak-surat', compact('letterTypes'));
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
     * @param  \App\LetterType  $letterType
     * @return \Illuminate\Http\Response
     */
    public function show(LetterType $letterType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LetterType  $letterType
     * @return \Illuminate\Http\Response
     */
    public function edit(LetterType $letterType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LetterType  $letterType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LetterType $letterType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LetterType  $letterType
     * @return \Illuminate\Http\Response
     */
    public function destroy(LetterType $letterType)
    {
        //
    }
}
