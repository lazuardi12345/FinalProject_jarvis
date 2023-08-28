@extends('main')
@section('content')
    
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>{{ $title }}</h3>
                <a href="/penggajians/create" class="btn icon icon-left btn-primary mb-3 mt-2"><svg
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-edit">
                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                    </svg> Add Gaji</a>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Penggajian</a></li>
                        <li class="breadcrumb-item active" aria-current="page">DataTable</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="col-12">
        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">Simple Datatable</div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>Potongan</th>
                            <th>Name</th>
                            <th>Tunjangan</th>
                            <th>Divisi</th>
                            <th>Gaji</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                         @foreach ($penggajians as $penggajian)
                         <tr>
                             <td>{{ $no }}</td>
                             <td>{{ $tunjangan->potongan }}</td>
                             <td>{{ $tunjangan->id_employees }}</td>
                             <td>{{ $tunjangan->id_tunjangans }}</td>
                             <td>{{ $tunjangan->id_divisis }}</td>
                             <td>{{ $tunjangan->gaji_pokok }}</td>
                             <td>
                                 <span class="badge bg-success">Active</span>
                             </td>
                         </tr>
                         @php
                         $no++;
                     @endphp
                 @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>
@endsection