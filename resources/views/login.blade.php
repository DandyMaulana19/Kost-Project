@extends('template.template')

@section('content')
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center" style="height: 100vh">
            <div class="p-4 border border-black rounded col-4">
                <div class="mb-4 d-flex align-items-center justify-content-center">
                    <h1>Login</h1>
                </div>
                <div class="mb-2">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Email">
                </div>
                <div class="mb-4">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Masukkan Password">
                </div>
                <div class="gap-2 d-grid">
                    <button class="btn btn-primary" type="button">Button</button>
                </div>
            </div>
        </div>
    </div>
@endsection
