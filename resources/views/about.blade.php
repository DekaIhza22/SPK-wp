@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('About') }}</h1>

    <div class="row justify-content-center">

        <div class="col-lg-6">

            <div class="card shadow mb-4">

                <div class="card-profile-image mt-4">
                    <img src="{{ asset('img/favicon-32x32.png') }}" class="rounded-circle" alt="user-image">
                </div>

                <div class="card-body">

                    <div class="row">
                        <div class="col-lg-12">
                            <h5 class="font-weight-bold">Announcement</h5>
                            <p>Basa Basi Author.</p>
                            <p>Dalam era digital saat ini, persaingan di dunia penyiaran radio semakin ketat. 
                                Setiap stasiun radio berlomba-lomba untuk menghadirkan konten yang menarik, kreatif, dan relevan bagi pendengarnya. 
                                Salah satu aspek penting dalam mencapai hal ini adalah pemilihan penyiar radio yang tepat.
                                Oleh karena itu, kami telah mengembangkan sebuah Sistem Pendukung Keputusan (SPK) 
                                untuk membantu dalam proses seleksi penyiar radio.</p>
                            <a href="https://github.com/DekaIhza22" target="_blank" class="btn btn-github">
                                <i class="fab fa-github fa-fw"></i> Go to repository
                            </a>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-lg-12">
                            <h5 class="font-weight-bold">Kesimpulan</h5>
                            <p>Pembuatan SPK Penyiar Radio ini adalah langkah inovatif yang diambil untuk memastikan bahwa stasiun radio dapat memilih penyiar yang tidak hanya menarik dan berkarisma,
                                tetapi juga mampu menjaga kesopanan dan profesionalisme dalam setiap siarannya. 
                                Dengan demikian, stasiun radio dapat terus menghadirkan program-program yang berkualitas dan disukai oleh pendengar.
                                Kami percaya bahwa dengan SPK ini, stasiun radio akan mampu bersaing lebih baik dan mencapai kesuksesan yang lebih tinggi.</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>

@endsection
