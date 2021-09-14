@extends('visitors.layouts.master', ['title' => "Profil Desa - Administratif"])

@section('content')
{{-- Start Breadcumb Section --}}
<?php
    $data=[
        'judul' => 'Administratif',
        'page1' => '> Profil Desa',
        'page2' => '> Administratif'
    ]
?>
@include('visitors.layouts.breadcumb', $data)
{{-- End Breadcumb Section --}}

{{-- Start Administratif Section --}}
<section id="administratif">
    <div class="container mb-5 ">
        <div class="row " data-aos="fade-up">
            <div class="col-lg-12 text-center mb-5 ">
                <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                    <li class="nav-item btn-responsive">
                        <a class="nav-link active  " type="button" id="pills-home-tab" data-toggle="pill"
                            href="#pills-jk" role="tab" aria-controls="pills-home" aria-selected="true">Jenis
                            Kelamin</a>
                    </li>
                    <li class="nav-item btn-responsive">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-pendidikan"
                            role="tab" aria-controls="pills-profile" aria-selected="false">Pendidikan</a>
                    </li>
                    <li class="nav-item btn-responsive">
                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-pekerjaan" role="tab"
                            aria-controls="pills-contact" aria-selected="false">Pekerjaan</a>
                    </li>
                    <li class="nav-item btn-responsive">
                        <a class="nav-link" id="pills-home-tab" data-toggle="pill" href="#pills-agama" role="tab"
                            aria-controls="pills-home" aria-selected="true">Agama</a>
                    </li>
                    <li class="nav-item btn-responsive">
                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-wn" role="tab"
                        aria-controls="pills-contact" aria-selected="false">Warga Negara</a>
                    </li>
                    {{-- <li class="nav-item btn-responsive">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-wilayah" role="tab"
                            aria-controls="pills-profile" aria-selected="false">Wilayah</a>
                    </li> --}}
                </ul>
            </div>
        </div>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-jk" role="tabpanel" aria-labelledby="pills-jk-tab">
                <div class="row my-shadow justify-content-center " id="page1">
                    <div class="col-lg-5 m-5 ">
                        <canvas id="jeniskelamin" width="400vw" height="250vh"></canvas>
                    </div>
                </div>
                <div class="row my-shadow justify-content-center mt-5 pt-5 pb-5 pr-4 pl-4  " id="page2">
                    <div class="col-12 table-responsive">
                        <table class=" table">
                            <thead class="thead-dark">
                                <tr class=" text-center">
                                    <th scope="col">No</th>
                                    <th scope="col">Kelompok</th>
                                    <th scope="col">Jumlah</th>
                                    <th scope="col">Persentase</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $grandTotal = 0;
                                    $grandPercentage = 0;
                                    $sexTotalArr = [];
                                    $sexArr = [];
                                @endphp
                                @foreach ($sexDatas as $number => $sex)
                                <tr class=" text-center">
                                    <th scope="row">{{$number + 1}}</th>
                                    <td>{{$sex['sex']}}</td>
                                    <td>{{$sex['total']}}</td>
                                    <td>{{number_format($sex['percentage'], 2)}} %</td>
                                </tr>
                                @php
                                    $grandTotal += $sex['total'];
                                    $grandPercentage += $sex['percentage'];
                                    $sexTotalArr[$number] = $sex['total'];
                                    $sexArr[$number] = $sex['sex'];
                                @endphp
                                @endforeach
                                <tr class=" text-center">
                                    <th scope="row"></th>
                                    <td>Total</td>
                                    <td>{{$grandTotal}}</td>
                                    <td>{{number_format($grandPercentage, 2)}} %</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="pills-pendidikan" role="tabpanel" aria-labelledby="pills-pendidikan-tab">
                <div class="row my-shadow justify-content-center " id="page1">
                    <div class="col-lg-5 m-5 ">
                        <canvas id="pendidikan" width="400vw" height="250vh"></canvas>
                    </div>
                </div>
                <div class="row my-shadow justify-content-center mt-5 pt-5 pb-5 pr-4 pl-4  " id="page2">
                    <div class="col-12 table-responsive">
                        <table class=" table">
                            <thead class="thead-dark">
                                <tr class=" text-center">
                                    <th scope="col">No</th>
                                    <th scope="col">Kelompok</th>
                                    <th scope="col">Jumlah</th>
                                    <th scope="col">Persentase</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $grandTotal = 0;
                                    $grandPercentage = 0;
                                @endphp
                                @foreach ($eduDatas as $number => $education)
                                <tr class=" text-center">
                                    <th scope="row">{{$number + 1}}</th>
                                    <td>{{$education['education']}}</td>
                                    <td>{{$education['total']}}</td>
                                    <td>{{number_format($education['percentage'], 2)}} %</td>
                                </tr>
                                @php
                                    $grandTotal += $education['total'];
                                    $grandPercentage += $education['percentage'];
                                @endphp
                                @endforeach
                                <tr class=" text-center">
                                    <th scope="row"></th>
                                    <td>Total</td>
                                    <td>{{$grandTotal}}</td>
                                    <td>{{number_format($grandPercentage, 2)}} %</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-pekerjaan" role="tabpanel" aria-labelledby="pills-pekerjaan-tab">
                <div class="row my-shadow justify-content-center " id="page1">
                    <div class="col-lg-5 m-5 ">
                        <canvas id="pekerjaan" width="400vw" height="250vh"></canvas>
                    </div>
                </div>
                <div class="row my-shadow justify-content-center mt-5 pt-5 pb-5 pr-4 pl-4  " id="page2">
                    <div class="col-12 table-responsive">
                        <table class=" table">
                            <thead class="thead-dark">
                                <tr class=" text-center">
                                    <th scope="col">No</th>
                                    <th scope="col">Kelompok</th>
                                    <th scope="col">Jumlah</th>
                                    <th scope="col">Persentase</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $grandTotal = 0;
                                    $grandPercentage = 0;
                                @endphp
                                @foreach ($profDatas as $number => $profession)
                                <tr class=" text-center">
                                    <th scope="row">{{$number + 1}}</th>
                                    <td>{{$profession['profession']}}</td>
                                    <td>{{$profession['total']}}</td>
                                    <td>{{number_format($profession['percentage'], 2)}} %</td>
                                </tr>
                                @php
                                    $grandTotal += $profession['total'];
                                    $grandPercentage += $profession['percentage'];
                                @endphp
                                @endforeach
                                <tr class=" text-center">
                                    <th scope="row"></th>
                                    <td>Total</td>
                                    <td>{{$grandTotal}}</td>
                                    <td>{{number_format($grandPercentage, 2)}} %</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-agama" role="tabpanel" aria-labelledby="pills-agama-tab">
                <div class="row my-shadow justify-content-center " id="page1">
                    <div class="col-lg-5 m-5 ">
                        <canvas id="agama" width="400vw" height="250vh"></canvas>
                    </div>
                </div>
                <div class="row my-shadow justify-content-center mt-5 pt-5 pb-5 pr-4 pl-4  " id="page2">
                    <div class="col-12 table-responsive">
                        <table class=" table">
                            <thead class="thead-dark">
                                <tr class=" text-center">
                                    <th scope="col">No</th>
                                    <th scope="col">Kelompok</th>
                                    <th scope="col">Jumlah</th>
                                    <th scope="col">Persentase</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $grandTotal = 0;
                                    $grandPercentage = 0;
                                    $relTotalArr = [];
                                    $relArr = [];
                                @endphp
                                @foreach ($relDatas as $number => $religion)
                                <tr class=" text-center">
                                    <th scope="row">{{$number + 1}}</th>
                                    <td>{{$religion['religion']}}</td>
                                    <td>{{$religion['total']}}</td>
                                    <td>{{number_format($religion['percentage'], 2)}} %</td>
                                </tr>
                                @php
                                    $grandTotal += $religion['total'];
                                    $grandPercentage += $religion['percentage'];
                                    $relTotalArr[$number] = $religion['total'];
                                    $relArr[$number] = $religion['religion'];
                                @endphp
                                @endforeach
                                <tr class=" text-center">
                                    <th scope="row"></th>
                                    <td>Total</td>
                                    <td>{{$grandTotal}}</td>
                                    <td>{{number_format($grandPercentage, 2)}} %</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="pills-wn" role="tabpanel" aria-labelledby="pills-wn-tab">
                <div class="row my-shadow justify-content-center " id="page1">
                    <div class="col-lg-5 m-5 ">
                        <canvas id="warganegara" width="400vw" height="250vh"></canvas>
                    </div>
                </div>
                <div class="row my-shadow justify-content-center mt-5 pt-5 pb-5 pr-4 pl-4  " id="page2">
                    <div class="col-12 table-responsive">
                        <table class=" table">
                            <thead class="thead-dark">
                                <tr class=" text-center">
                                    <th scope="col">No</th>
                                    <th scope="col">Kelompok</th>
                                    <th scope="col">Jumlah</th>
                                    <th scope="col">Persentase</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $grandTotal = 0;
                                    $grandPercentage = 0;
                                    $natTotalArr = [];
                                    $natArr = [];
                                @endphp
                                @foreach ($natDatas as $number => $nationality)
                                <tr class=" text-center">
                                    <th scope="row">{{$number + 1}}</th>
                                    <td>{{$nationality['nationality']}}</td>
                                    <td>{{$nationality['total']}}</td>
                                    <td>{{number_format($nationality['percentage'], 2)}} %</td>
                                </tr>
                                @php
                                    $grandTotal += $nationality['total'];
                                    $grandPercentage += $nationality['percentage'];
                                    $natTotalArr[$number] = $nationality['total'];
                                    $natArr[$number] = $nationality['nationality'];
                                @endphp
                                @endforeach
                                <tr class=" text-center">
                                    <th scope="row"></th>
                                    <td>Total</td>
                                    <td>{{$grandTotal}}</td>
                                    <td>{{number_format($grandPercentage, 2)}} %</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            {{-- <div class="tab-pane fade" id="pills-wilayah" role="tabpanel" aria-labelledby="pills-wilayah-tab">
                <div class="row my-shadow justify-content-center " id="page1">
                    <div class="col-lg-5 m-5 ">
                        <canvas id="wilayah" width="400vw" height="250vh"></canvas>
                    </div>
                </div>
                <div class="row my-shadow justify-content-center mt-5 pt-5 pb-5 pr-4 pl-4  " id="page2">
                    <div class="col-12 table-responsive">
                        <table class=" table">
                            <thead class="thead-dark">
                                <tr class=" text-center">
                                    <th scope="col">No</th>
                                    <th scope="col">Kelompok</th>
                                    <th scope="col">Laki-laki</th>
                                    <th scope="col">Perempuan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class=" text-center">
                                    <th scope="row">1</th>
                                    <td>Laki-laki</td>
                                    <td>n</td>
                                    <td>n</td>
                                </tr>
                                <tr class=" text-center">
                                    <th scope="row">2</th>
                                    <td>Perempuan</td>
                                    <td>n</td>
                                    <td>n</td>
                                </tr>
                                <tr class=" text-center">
                                    <th scope="row"></th>
                                    <td>Jumlah</td>
                                    <td>n</td>
                                    <td>n</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> --}}

        </div>
    </div>
</section>

{{-- End Administratif Section --}}

<script>
    $(function () {
        //kelamin
            var ctx = document.getElementById("jeniskelamin").getContext('2d');
            var data = {
                datasets: [{
                    data: @json($sexTotalArr),
                    backgroundColor: [
                        '#3c8dbc',
                        '#f56954',
                    ],
                }],
                labels: @json($sexArr)
            };
            var myDoughnutChart = new Chart(ctx, {
                type: 'doughnut',
                data: data,
                options: {
                    responsive: true,
                    maintainAspectRatio: true,
                    legend: {
                        position: 'right',
                        labels: {
                            boxWidth: 12
                        }
                    }
                }
            });
        //pendidikan
            var ctx_2 = document.getElementById("pendidikan").getContext('2d');
            var data_2 = {
                datasets: [{
                    data: [10, 20, 30],
                    backgroundColor: [
                        '#3c8dbc',
                        '#f56954',
                        '#f39c12',
                    ],
                }],
                labels: [
                    'Request',
                    'Layanan',
                    'Problem'
                ]
            };
            var myDoughnutChart_2 = new Chart(ctx_2, {
                type: 'doughnut',
                data: data_2,
                options: {
                    responsive: true,
                    maintainAspectRatio: true,
                    legend: {
                        position: 'right',
                        labels: {
                            boxWidth: 12
                        }
                    }
                }
            });

        //pekerjaan
            var ctx_3 = document.getElementById("pekerjaan").getContext('2d');
            var data_3 = {
                datasets: [{
                    data: [10, 20, 30],
                    backgroundColor: [
                        '#3c8dbc',
                        '#f56954',
                        '#f39c12',
                    ],
                }],
                labels: [
                    'Request',
                    'Layanan',
                    'Problem'
                ]
            };
            var myDoughnutChart_3 = new Chart(ctx_3, {
                type: 'doughnut',
                data: data_3,
                options: {
                    responsive: true,
                    maintainAspectRatio: true,
                    legend: {
                        position: 'right',
                        labels: {
                            boxWidth: 12
                        }
                    }
                }
            });

        //agama
            var ctx_4 = document.getElementById("agama").getContext('2d');
            var data_4 = {
                datasets: [{
                    data: @json($relTotalArr),
                    backgroundColor: [
                        '#3c8dbc',
                        '#f56954',
                        '#f39c12',
                        '#26de81',
                        '#a55eea',
                        '#636e72',
                        '#ffeaa7',
                    ],
                }],
                labels: @json($relArr)
            };
            var myDoughnutChart_4 = new Chart(ctx_4, {
                type: 'doughnut',
                data: data_4,
                options: {
                    responsive: true,
                    maintainAspectRatio: true,
                    legend: {
                        position: 'right',
                        labels: {
                            boxWidth: 12
                        }
                    }
                }
            });

        //warga negara
            var ctx_6 = document.getElementById("warganegara").getContext('2d');
            var data_6 = {
                datasets: [{
                    data: @json($natTotalArr),
                    backgroundColor: [
                        '#3c8dbc',
                        '#f56954',
                        '#f39c12',
                    ],
                }],
                labels: @json($natArr)
            };
            var myDoughnutChart_6 = new Chart(ctx_6, {
                type: 'doughnut',
                data: data_6,
                options: {
                    responsive: true,
                    maintainAspectRatio: true,
                    legend: {
                        position: 'right',
                        labels: {
                            boxWidth: 12
                    }
                    }
                }
            });

        //wilayah
            // var ctx_5 = document.getElementById("wilayah").getContext('2d');
            // var data_5 = {
            //     datasets: [{
            //         data: [10, 20, 30],
            //         backgroundColor: [
            //             '#3c8dbc',
            //             '#f56954',
            //             '#f39c12',
            //         ],
            //     }],
            //     labels: [
            //         'Request',
            //         'Layanan',
            //         'Problem'
            //     ]
            // };
            // var myDoughnutChart_5 = new Chart(ctx_5, {
            //     type: 'doughnut',
            //     data: data_5,
            //     options: {
            //         responsive: true,
            //         maintainAspectRatio: true,
            //         legend: {
            //             position: 'right',
            //             labels: {
            //                 boxWidth: 12
            //             }
            //         }
            //     }
            // });
    });


</script>
@endsection
