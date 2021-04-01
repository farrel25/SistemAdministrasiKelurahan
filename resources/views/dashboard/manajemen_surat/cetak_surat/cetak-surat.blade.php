@extends('dashboard.layouts.master', ['title' => "Cetak Surat"])

@section('content')

<?php
    $data=[
        'icon' => "pe-7s-print",
        'judul' => "Cetak Surat",
        'link' => route('manajemen-surat.cetak-surat') ,
        'page1' => "Cetak Surat"
    ]
?>
@include('dashboard.layouts.page-title',$data)

<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">Cetak Surat
                <div class="btn-actions-pane-right ">
                    <a type="button"
                        class="btn btn-lg btn-focus btn-sm text-white font-weight-normal m-1 mb-2 mt-2 btn-responsive"
                        href="#">+
                        Tambah Data </a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="align-middle mb-0 table table-borderless table-striped table-hover p-5">
                    <thead>
                        <tr>
                            {{-- <th class=" text-center"><input type="checkbox" onchange="checkAll(this)" name="chk[]"></th> --}}
                            <th class=" text-center">No.</th>
                            <th class=" text-center">Aksi</th>
                            <th class=" text-center">Kode Surat</th>
                            <th class=" text-left">Layanan Administrasi Surat</th>
                            {{-- <th class=" text-center">Lampiran</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($letterTypes as $number => $type)
                        <tr>
                            {{-- <td class=" text-center"><input type="checkbox" name="chkbox[]" value="1"></td> --}}
                            <td class=" text-center">{{ ++$number }}</td>
                            <td class=" text-center">
                                <a type="button" class="btn btn-sm btn-alternate text-white font-weight-normal "
                                    href="{{ route('manajemen-surat.buat-cetak-surat') }}"><i
                                        class="fas fa-edit border-right pr-1"></i> Buat Surat
                                </a>
                            </td>
                            <td class=" text-center">{{ $type->letter_code }}</td>
                            <td class=" text-left">{{ $type->type }}</td>
                            {{-- <td class=" text-center">{{ $type }}</td> --}}
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class=" d-block card-footer ">
                <div class="card-body ">
                    <nav class=" " aria-label="Page navigation example">
                        <ul class="pagination ">
                            <!-- {{-- <li class="page-item"><a href="javascript:void(0);" class="page-link"
                                    aria-label="Previous"><span aria-hidden="true">«</span><span
                                        class="sr-only">Previous</span></a></li>
                            <li class="page-item active"><a href="javascript:void(0);" class="page-link">1</a></li>
                            <li class="page-item"><a href="javascript:void(0);" class="page-link">2</a></li>
                            <li class="page-item"><a href="javascript:void(0);" class="page-link">3</a></li>
                            <li class="page-item"><a href="javascript:void(0);" class="page-link">4</a></li>
                            <li class="page-item"><a href="javascript:void(0);" class="page-link">5</a></li>
                            <li class="page-item"><a href="javascript:void(0);" class="page-link" aria-label="Next"><span
                                        aria-hidden="true">»</span><span class="sr-only">Next</span></a></li> --}} -->
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
