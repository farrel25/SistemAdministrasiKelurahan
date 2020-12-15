@extends('visitors.layouts.master', ['title' => "Profil Desa - Administratif"])

@section('content')
{{-- Start Breadcumb Section --}}
@include('visitors.layouts.breadcumb', ['judul' => "Administratif"], ['page1' => "/ Profil Desa", 'page2' => "/ Administratif"])
{{-- Start end Section --}}

{{-- Start Administratif Section --}}
<section id="administratif">
    <div class="container mb-5 ">
        <div class="row " data-aos="fade-up">
            <div class="col-lg-12 text-center mb-5 ">
                @include('visitors.layouts.administratif-button')
            </div>
        </div>
        <div class="row my-shadow justify-content-center " id="page1">
            <div class="col-11 m-5">
                <canvas id="kelamin" width="400vw" height="150vh"></canvas>
                <script>
                    var config = {
                        type: 'bar',
                        data: {
                            datasets: [{
                                data: [19, 20],
                                backgroundColor: [
                                    '#fe5670',
                                    '#3c50e0'
                                ],
                                label: 'Jenis Kelamin'
                            }],
                            labels: [
                                'Laki-laki',
                                'Perempuan'
                            ]
                        },
                        options: {
                            legend: {
                                display: true,
                                position: 'top',
                                fullWidth: false
                            },
                            animation: {
                                animateScale: true,
                                animateRotate: true
                            },
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        beginAtZero: true
                                    }
                                }]
                            }
                        }
                    };
                    window.onload = function() {
                        var ctx = document.getElementById('kelamin').getContext('2d');
                        window.myDoughnut = new Chart(ctx, config);
                    };
                </script>
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
    </div>
</section>

{{-- End Administratif Section --}}
@endsection