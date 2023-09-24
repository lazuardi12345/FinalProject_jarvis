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
            <div class="card-content text-center"
                style="display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100%;">
                <!-- Menambahkan style untuk menggunakan CSS Flexbox -->
                @if ($user->employee->photo)
                    <div class="rounded-circle overflow-hidden" style="width: 150px; height: 150px;">
                        <img src="{{ asset('/storage/images/employees/' . $user->employee->photo) }}"
                            alt="Foto {{ $user->name }}" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                @else
                    <div class="rounded-circle overflow-hidden" style="width: 150px; height: 150px;">
                        <img src="{{ asset('/path/to/placeholder/image.jpg') }}" alt="Foto tidak tersedia"
                            style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                @endif
                <div class="mt-3">
                    <h4>{{ $user->name }}</h4>
                    <p>{{ $user->role }}</p>
                </div>
            </div>
        </div>

        <div class="card col-md-6 ms-md-5 col-sm-12">
            <div class="card-content">
                <div class="card-body">
                    <form class="form form-horizontal">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Name</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <input type="text" class="form-control" placeholder="Name"
                                                id="first-name-icon" value="{{ $user->name }}" readonly>
                                            <div class="form-control-icon">
                                                <i class="bi bi-person"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label>Email</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <input type="email" class="form-control" placeholder="Email" id="email-icon"
                                                value="{{ $user->email }}" readonly>
                                            <div class="form-control-icon">
                                                <i class="bi bi-envelope"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label>Mobile</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <input type="number" class="form-control" placeholder="Mobile"
                                                value="{{ $user->employee->no_hp }}" readonly>
                                            <div class="form-control-icon">
                                                <i class="bi bi-telephone"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label>Alamat</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <input type="text" class="form-control" placeholder="Alamat" id="alamat-icon"
                                                value="{{ $user->employee->alamat }}" readonly>
                                            <div class="form-control-icon">
                                                <i class="bi bi-house"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label>Gaji Pokok</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <input type="text" class="form-control" placeholder="Gaji Pokok"
                                                value="Rp. {{ number_format($user->employee->gaji_pokok) }}" readonly>
                                            <div class="form-control-icon">
                                                <i class="bi bi-cash"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                    <label>Divisi</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <input type="text" class="form-control" placeholder="Divisi" id="divisi-icon"
                                                value="{{ $user->employee->divisi->nama_divisi }}" readonly>
                                            <div class="form-control-icon">
                                                <i class="bi bi-briefcase"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="card-footer d-flex justify-content-between mt-lg-5">
                        <span class="mt-lg-5"></span>
                        <button class="btn btn-light-primary">
                            <a href="/">
                                <span>Back</span>
                            </a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
