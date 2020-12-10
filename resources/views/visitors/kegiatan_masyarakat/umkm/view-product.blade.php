@extends('visitors.layouts.master', ['title' => "Artikel"])

@section('content')

{{-- Start Breadcumb Section --}}
@include('visitors.layouts.breadcumb', ['judul' => "UMKM"],['page1' => "/ UMKM",'page2' => "/ Sejahtera",'page3' => "/ Product"])
{{-- Start end Section --}}

{{-- Start Article Section --}}

{{-- End Article Section --}}
@endsection