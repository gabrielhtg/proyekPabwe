@extends('template.app')

@section('isi-halaman')

<main class="mx-auto">
    <section class="container">
        <img src="{{ asset('/assets/img/header-fasilitas.jpeg') }}" class="img-fluid d-block w-100" alt="header-fasilitas">
    </section>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a href="#" class="nav-link {{ Request::is('/') ? 'active' : '' }}">Asrama</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Kesehatan & Olahraga</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Area Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Laboratorium</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Food Service</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <section class="container" id="Asrama">
        <div class="text-center fw-bolder">
            <h1>Asrama</h1>
        </div>
        <div class="custom-justified-text align-items-center pt-3">
            <p>Sejak didirikan tahun 2001, IT Del sudah mengharuskan mahasiswanya untuk tinggal diasrama tanpa terkecuali.  
            Tujuannya adalah agar menunjang keberhasilan pencapaian tujuan pendidikan mahasiswanya. Asrama di IT Del juga merupakan sarana pendidikan dalam pembentukan karakter mahasiswanya.
            IT Del selalu berusaha menciptakan manusia yang tidak hanya pintar tapi juga yang MarTuhan, Maroha dan Marbisuk (Berketuhanan, Berperasaan dan Bijaksana).</p>
        </div>

        <div class="text-center pt-5 text-bolder">
            <h2>-Asrama Putra-</h2>
        </div>
        
        <div class="container pt-5" id="asrama-pniel">
            <div class="row">
                <div class="col-md-6 mx-auto d-flex flex-column my-auto">
                    <h3>Asrama Pniel</h3>
                    <div class="lh-base text-break text-justify custom-justified-text align-items-center">
                        <p>
                        is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                        </p>
                        <p>
                            <span class="fw-bold">Lokasi:</span> Institut Teknologi Del, Jl. Sisingamangaraja, Sitoluama, Laguboti, Toba Samosir, Sumatera Utara, Indonesia
                        </p>
                        <p>Pembina Asrama:
                            <ol>
                                <li>Irianto</li>
                                <li>Herman</li>
                            </ol>
                        </p>
                    </div>
                </div>

                <div class="col-md-6">
                <img src="{{ asset('/assets/img/asrama-pniel.jpeg') }}" class="img-fluid custom-image" alt="asrama-pniel">
                </div>
            </div>
        </div>

        <div class="container pt-5" id="asrama-jati">
            <div class="row">
                <div class="col-md-6 mx-auto d-flex flex-column my-auto">
                    <h3>Asrama Jati</h3>
                    <div class="lh-base text-break text-justify custom-justified-text align-items-center">
                        <p>
                        is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                        </p>
                        <p>
                            <span class="fw-bold">Lokasi:</span> Institut Teknologi Del, Jl. Sisingamangaraja, Sitoluama, Laguboti, Toba Samosir, Sumatera Utara, Indonesia
                        </p>
                        <p>Pembina Asrama:
                            <ol>
                                <li>Irianto</li>
                                <li>Herman</li>
                            </ol>
                        </p>
                    </div>
                </div>

                <div class="col-md-6">
                <img src="{{ asset('/assets/img/asrama-jati.jpeg') }}" class="img-fluid" alt="asrama-jati">
                </div>
            </div>
        </div>

        <div class="text-center pt-5 text-bolder">
            <h2>-Asrama Putri-</h2>
        </div>

        <div class="container pt-5" id="rusun-2">
            <div class="row">
                <div class="col-md-6 mx-auto d-flex flex-column my-auto">
                    <h3>Rusun 2</h3>
                    <div class="lh-base text-break text-justify custom-justified-text align-items-center">
                        <p>
                        is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                        </p>
                        <p>
                            <span class="fw-bold">Lokasi:</span> Institut Teknologi Del, Jl. Sisingamangaraja, Sitoluama, Laguboti, Toba Samosir, Sumatera Utara, Indonesia
                        </p>
                        <p>Pembina Asrama:
                            <ol>
                                <li>Irianto</li>
                                <li>Herman</li>
                            </ol>
                        </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <img src="{{ asset('/assets/img/rusun-2.jpeg') }}" class="img-fluid" alt="rusun-2">
                </div>
            </div>
        </div>

    </section>
</main>

@endsection
