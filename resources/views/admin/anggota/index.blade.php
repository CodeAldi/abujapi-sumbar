@extends('layouts.dashboard.main')
@section('content')
    <div class="card h-100">
        <div class="card-header">
            <h2 class="card-title">Anggota</h2>
        </div>
        <div class="card-body">
            <div class="row d-flex gap-2 justify-content-end">
                <a href="javascript:void(0);" class="btn btn-success col-3">
                    <i class='bx bx-user-plus'></i>
                    Tambah (single)</a>
                <a href="javascript:void(0);" class="btn btn-success col-3">
                    <i class='bx bx-group'></i>
                    Tambah (multiple)</a>
            </div>

        </div>
    </div>
@endsection