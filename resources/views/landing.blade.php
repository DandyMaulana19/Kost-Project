@extends('template.app')

@section('title', 'Landing Page')

@section('content')
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="text-center col-md-6 text-md-start my-2 my-md-0">
                    <h1 class="display-4 fw-bold">Selamat Datang di Website D'Kost</h1>
                    <p class="lead">Platform website pencarian kost tanpa ribet dan terpercaya</p>
                    <button class="btn btn-primary ">Bergabung</button>
                </div>
                <div class="col-md-6">
                    <img src="https://binabangunbangsa.com/wp-content/uploads/2020/03/tips-Manajemen-Rumah-Kost-yang-Baik-dan-Benar-.jpg"
                        alt="Hero Image" class="rounded img-fluid">
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row align-items-center flex-wrap-reverse justify-content-around my-2 my-md-0">
                <div class="col-md-6">
                    <img src="https://i.pinimg.com/736x/3f/1c/b9/3f1cb97aa3408d48c2da4ebd2e73a77b.jpg" alt="About Us"
                        class="rounded img-fluid">
                </div>
                <div class="col-md-6 text-center text-md-start">
                    <h2 class="fw-bold">Tentang Kami</h2>
                    <p class="text-muted">
                        D'Kost adalah platform website pencarian kost yang memudahkan pengguna dalam mencari kost yang
                        sesuai dengan kebutuhan. Kami menyediakan berbagai macam pilihan kost yang dapat disesuaikan
                        dengan budget dan kebutuhan pengguna.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container text-center g-2">
            <div class="w-100 text-end">
                <a href="{{ url('/list-kost') }}" class="text-black-50 fw-bold text-decoration-underline">Lihat Semua</a>
            </div>
            <h2 class="mb-4">Servis Kami</h2>
            <div class="row justify-content-around">
                @foreach ($kosts as $kost)
                    <div class="card m-3" style="width: 15rem; ">
                        <img src="{{ 'storage/' . $kost->image }}" class="card-img-top" alt="{{ $kost->nama }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $kost->nama }}</h5>
                            <p class="card-text">Rp. {{ number_format($kost->harga) }}</p>
                            <a href="{{ url('/list-kost/detail', $kost->id) }}" class="btn btn-primary">Lihat Kos</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container text-center">
            <h2 class="mb-4">Kelebihan Kami</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="p-3 shadow-sm card h-100">
                        <p>"Layanan luar biasa! Sangat merekomendasikan kepada siapa pun yang mencari kos."</p>
                        <small>- Client A</small>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-3 shadow-sm card h-100">
                        <p>"Website ini sangat membantu. Solusi yang luar biasa untuk para pendatang yang sedang mencari
                            tempat tinggal!"</p>
                        <small>- Client B</small>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-3 shadow-sm card h-100">
                        <p>"Efisien, andal, dan terpercaya. Saya merasa sangat terbantu dengan adanya website keren ini"</p>
                        <small>- Client C</small>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="py-4 bg-dark text-light">
        <div class="container text-center">
            <p class="mb-0">&copy; Tubes PAW. All Rights Reserved.</p>
        </div>
    </footer>

@endsection
