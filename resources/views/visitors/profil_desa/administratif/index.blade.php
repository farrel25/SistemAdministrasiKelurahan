@extends('visitors.layouts.master', ['title' => "Profil Desa - Administratif"])

@section('content')
<style>
    canvas {
        -moz-user-select: none;
        -webkit-user-select: none;
        -ms-user-select: none;
    }
</style>
{{-- Start Administratif Section --}}
<section id="administratif">
    <div class="container mb-5 ">
        <div class="row " data-aos="fade-up">
            <div class="col-lg-12 text-center mb-5 ">
                <h2>Administratif</h2>
                <div class=" btn-administratif mt-4 ">
                    <button type="button" class="btn btn-outline-dark active btn-responsive">Jenis Kelamin</button>
                    <a href="/profil_desa/administratif/pendidikan"><button type="button" class="btn btn-outline-dark btn-responsive">Pendidikan</button></a>
                    <button type="button" class="btn btn-outline-dark btn-responsive">Pekerjaan</button>
                    <button type="button" class="btn btn-outline-dark btn-responsive">Agama</button>
                    <button type="button" class="btn btn-outline-dark btn-responsive">Wilayah</button>
                    <button type="button" class="btn btn-outline-dark btn-responsive">Warga Negara</button>
                </div>
            </div>
        </div>
        <div class="row my-shadow justify-content-center ">
            <div class="col-11 m-5">
                <canvas id="kelamin" width="400vw" height="150vh"></canvas>
                <script>
                    var options = {
                        tooltips: {
                            enabled: false
                        },
                        plugins: {
                            datalabels: {
                                formatter: (value, ctx) => {
                                    let datasets = ctx.chart.data.datasets;
                                    if (datasets.indexOf(ctx.dataset) === datasets.length - 1) {
                                        let sum = datasets[0].data.reduce((a, b) => a + b, 0);
                                        let percentage = Math.round((value / sum) * 100) + '%';
                                        return percentage;
                                    } else {
                                        return percentage;
                                    }
                                },
                                color: '#fff',
                            }
                        }
                    };
                    var config = {
                        type: 'bar',
                        data: {
                            datasets: [{
                                data: [19, 20],
                                backgroundColor: [
                                    '#aaa',
                                    '#ddd'
                                ],
                                label: 'Dataset 1'
                            }],
                            labels: [
                                'Laki-laki',
                                'Perempuan'
                            ]
                        },
                        options: options,
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
        <div class="row my-shadow justify-content-center mt-5 pt-5 pb-5 pr-4 pl-4 ">
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
<script type="text/javascript">
    $('.mySlider').slick({
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
</script>