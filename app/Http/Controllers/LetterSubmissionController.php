<?php

namespace App\Http\Controllers;

use App\LetterSubmission;
use Illuminate\Http\Request;

class LetterSubmissionController extends Controller
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
        return view('visitors.pelayanan.pengajuan-surat');
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
     * @param  \App\LetterSubmission  $letterSubmission
     * @return \Illuminate\Http\Response
     */
    public function show(LetterSubmission $letterSubmission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LetterSubmission  $letterSubmission
     * @return \Illuminate\Http\Response
     */
    public function edit(LetterSubmission $letterSubmission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LetterSubmission  $letterSubmission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LetterSubmission $letterSubmission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LetterSubmission  $letterSubmission
     * @return \Illuminate\Http\Response
     */
    public function destroy(LetterSubmission $letterSubmission)
    {
        //
    }
}
