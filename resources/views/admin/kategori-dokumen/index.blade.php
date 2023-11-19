@extends('layouts.dashboard.main')
@section('content')
<div class="card h-100">
    <div class="card-header">
        <h5 class="card-title">kategori-Dokumen</h5>
    </div>
    <div class="card-body">
        <form action="#" method="post">
            @csrf
            <div class="row d-flex justify-content-end">
                <div class="col-4"><input type="text" name="judul_kategori" class="form-control"></div>
                <button class="btn btn-success col-2">Tambah</button>
            </div>
        </form>
        <div class="table-responsive text-nowrap">
            <table class="table h-100">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul Kategori</th>
                        <th>Dokumen dengan katgori ini</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    <tr>
                        <td>1</td>
                        <td>Albert Cook</td>
                        <td>1</td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                    data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                            class="bx bx-edit-alt me-1"></i>
                                        Edit</a>
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i>
                                        Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4" class="text-white text-center bg-warning">No Data</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection