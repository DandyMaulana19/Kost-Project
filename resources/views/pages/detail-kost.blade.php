@extends('template.app')

@section('title', 'Detail Kos')

@section('content')
    <div class="container py-4">
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="{{ asset('storage/' . $kost->image) }}" alt="{{ $kost->nama }}"
                    class="rounded shadow-sm img-fluid w-100">
            </div>

            <div class="col-md-6">
                <h1 class="mb-3">{{ $kost->nama }}</h1>
                <p><strong>Tipe:</strong> {{ $kost->tipe }}</p>
                <p><strong>Alamat:</strong> {{ $kost->alamat }}</p>
                <p><strong>Status:</strong>
                    <span
                        class="badge {{ $kost->status == 'Tersedia' ? 'bg-success' : 'bg-danger' }}">{{ $kost->status }}</span>
                </p>
                <p><strong>Stok:</strong> {{ $kost->stock }} kamar</p>
                <p><strong>Deskripsi:</strong></p>
                <p>{{ $kost->deskripsi }}</p>

                <div class="mt-4">
                    <a href="{{ url('/list-kost') }}" class="btn btn-secondary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
@endsection
