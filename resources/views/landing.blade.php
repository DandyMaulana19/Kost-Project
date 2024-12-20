@extends('template.app')

@section('title', 'Landing Page')

@section('content')
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="text-center col-md-6 text-md-start">
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
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="https://i.pinimg.com/736x/3f/1c/b9/3f1cb97aa3408d48c2da4ebd2e73a77b.jpg" alt="About Us"
                        class="rounded img-fluid">
                </div>
                <div class="col-md-6">
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
