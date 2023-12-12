@extends('layouts.dashboard.main')
@section('content')
    <div class="card h-100">
        <div class="card-header">
            <h5 class="card-title">kategori-kegiatan</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('kegiatan.kategori-kegiatan.store') }}" method="post">
                @csrf
                <div class="row d-flex justify-content-end">
                    <div class="col-4"><input type="text" name="judul_kategori" class="form-control" required></div>
                    <button class="btn btn-success col-2">Tambah</button>
                </div>
            </form>
            <div class="table-responsive text-wrap">
                <table class="table h-100">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul Kategori</th>
                            <th>kegiatan dengan katgori ini</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @forelse ($kategoriKegiatan as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->judul_kategori }}</td>
                            <td>1</td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i>
                                            Edit</a>
                                            <form action="{{ route('kegiatan.kategori-kegiatan.delete',['kategoriKegiatan'=>$item]) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i>
                                                    Delete</button>
                                            </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="text-white text-center bg-warning">No Data</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection