@extends('template.admin')

@section('title', 'Detail Kos')

@section('content')
    <div class="container mt-5">
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="{{ asset($kos->image) }}" alt="{{ $kos->nama }}" class="rounded shadow-sm img-fluid w-100">
            </div>

            <div class="col-md-6">
                <h1 class="mb-3">{{ $kos->nama }}</h1>
                <p><strong>Tipe:</strong> {{ $kos->tipe }}</p>
                <p><strong>Alamat:</strong> {{ $kos->alamat }}</p>
                <p><strong>Status:</strong>
                    @if ($kos->status === 'tersedia')
                        <span class="badge bg-success">Tersedia</span>
                    @else
                        <span class="badge bg-danger">Penuh</span>
                    @endif
                </p>
                <p><strong>Stok:</strong> {{ $kos->stock }} kamar</p>
                <p><strong>Deskripsi:</strong></p>
                <p>{{ $kos->deskripsi }}</p>

                <div class="mt-4">
                    <a href="{{ url('/admin/dashboard') }}" class="btn btn-secondary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
@endsection
