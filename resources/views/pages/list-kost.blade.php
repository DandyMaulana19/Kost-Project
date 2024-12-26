@extends('template.app')

@section('title', 'List Kost')

@section('content')
    <div class="container py-4">
        <div class="h-auto row d-flex justify-content-center align-items-center">
            <div class="flex-wrap col-12 d-flex justify-content-around">
                @foreach ($kosts as $kost)
                    <div class="card m-4" style="width: 18rem;">
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
    </div>

@endsection
