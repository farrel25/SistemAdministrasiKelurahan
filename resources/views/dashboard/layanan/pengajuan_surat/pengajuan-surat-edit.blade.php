@extends('dashboard.layouts.master', ['title' => "Pengajuan Surat"])

@section('content')

<?php
    $data=[
        'icon' => "pe-7s-mail",
        'judul' => "Pengajuan Surat",
        'link' => route('manajemen-artikel.komentar') ,
        'page1' => "Pengajuan Surat"
    ]
?>
@include('dashboard.layouts.page-title',$data)



@endsection
