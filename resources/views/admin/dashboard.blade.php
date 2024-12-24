@extends('template.admin')

@section('title', 'Dashboard')

@section('content')
    <div class="container py-5">
        <div class="mb-5 row">
            <div class="mb-3 col-md-4 col-sm-6">
                <div class="p-4 text-white rounded shadow d-flex bg-primary align-items-center" style="height: 150px;">
                    <div class="display-1 fw-bold me-3" style="flex: 1;">{{ $totalKost }}</div>
                    <div class="text-end" style="flex: 2;">
                        <div class="fs-6">Kamar Kos</div>
                        <div class="fw-bold">Total</div>
                    </div>
                </div>
            </div>
            <div class="mb-3 col-md-4 col-sm-6">
                <div class="p-4 text-white rounded shadow d-flex bg-success align-items-center" style="height: 150px;">
                    <div class="display-1 fw-bold me-3" style="flex: 1;">{{ $kostTersedia }}</div>
                    <div class="text-end" style="flex: 2;">
                        <div class="fs-6">Kamar Kos</div>
                        <div class="fw-bold">Tersedia</div>
                    </div>
                </div>
            </div>
            <div class="mb-3 col-md-4 col-sm-6">
                <div class="px-4 text-white rounded shadow flex-column d-flex bg-danger justify-content-center align-items-center"
                    style="height: 150px;">
                    <div class="col-12 d-flex justify-content-between align-items-center">
                        <span class="fw-bold fs-3">{{ $kostPutra }}</span>
                        <span class="fs-6">Kos Putra</span>
                    </div>
                    <div class="col-12 d-flex justify-content-between align-items-center">
                        <span class="fw-bold fs-3">{{ $kostPutri }}</span>
                        <span class="fs-6">Kos Putri</span>
                    </div>
                    <div class="col-12 d-flex justify-content-between align-items-center">
                        <span class="fw-bold fs-3">{{ $kostCampur }}</span>
                        <span class="fs-6">Kos Campur</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="shadow card">
                    <div class="text-white card-header bg-primary">
                        <h5 class="mb-0">Daftar Kos</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Kos</th>
                                        <th>Tipe Kos</th>
                                        <th>Stock</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Kos Mawar</td>
                                        <td>Putri</td>
                                        <td>10</td>
                                        <td>
                                            <button class="btn btn-info btn-sm">Detail</button>
                                            <button class="btn btn-warning btn-sm">Edit</button>
                                            <button class="btn btn-danger btn-sm">Hapus</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Kos Melati</td>
                                        <td>Putra</td>
                                        <td>5</td>
                                        <td>
                                            <button class="btn btn-info btn-sm">Detail</button>
                                            <button class="btn btn-warning btn-sm">Edit</button>
                                            <button class="btn btn-danger btn-sm">Hapus</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Kos Anggrek</td>
                                        <td>Campur</td>
                                        <td>8</td>
                                        <td>
                                            <button class="btn btn-info btn-sm">Detail</button>
                                            <button class="btn btn-warning btn-sm">Edit</button>
                                            <button class="btn btn-danger btn-sm">Hapus</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
