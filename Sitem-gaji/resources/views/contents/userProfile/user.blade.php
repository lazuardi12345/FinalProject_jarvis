@extends('main')
@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>{{ $title }}</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/employee">User Profile</a></li>
                            <li class="breadcrumb-item active" aria-current="page">DataTable</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="card col-md-5 col-sm-12">
            <div class="card-content">
                <img src="{{ asset('/storage/images/employees/' . $user->employee->photo) }}"
                    alt="Foto {{ $user->name }}">
            </div>
        </div>

        <div class="card col-md-6 ms-md-5 col-sm-12">
            <div class="card-content">
                <div class="card-body">
                    <h5 class="card-title">{{ $user->name }}</h5>
                    <p class="card-text">
                        Alamat: {{ $user->employee->alamat }}
                    </p>
                </div>
            </div>
            <ul class="list-group list-group-flush mb-lg-5">
                <li class="list-group-item">No HP: {{ $user->employee->no_hp }}</li>
                <li class="list-group-item">Gaji Pokok: Rp {{ $user->employee->gaji_pokok }}</li>
                <li class="list-group-item">Divisi: {{ $user->employee->divisi->nama_divisi }}</li>
                <li class="list-group-item">Role: {{ $user->role }}</li>
            </ul>

            <div class="card-footer d-flex justify-content-between mt-lg-5">
                <span class="mt-lg-5"></span>
                <button class="btn btn-light-primary">
                    <a href="/employee">
                        <span>Back</span>
                    </a>
                </button>
            </div>
        </div>
    </div>
@endsection
