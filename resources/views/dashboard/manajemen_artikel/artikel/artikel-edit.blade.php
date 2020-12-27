@extends('dashboard.layouts.master', ['title' => "Edit Artikel"])

@section('content')

<?php
    $data=[
        'icon' => "fas fa-edit",
        'judul' => "Edit Artikel",
        'link' => route('manajemen-artikel.artikel') ,
        'page1' => "Artikel",
        'page2' => "/ Edit",
        'page3' => "/  Judul Artikel"
    ]
?>
@include('dashboard.layouts.page-title',$data)



@endsection
