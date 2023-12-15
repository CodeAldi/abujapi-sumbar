@extends('layouts.dashboard.main')
@section('content')
<div class="card h-100">
    <div class="card-header">
        <h5 class="card-title">List Kegiatan</h5>
    </div>
    <div class="card-body">
        <div class="row d-flex justify-content-end">
            <a href="{{ route('kegiatan.kegiatan.create') }}" class="btn btn-success col-2">Tulis Kegiatan Baru</a>
        </div>
        <div class="table-responsive text-nowrap">
            <table class="table h-100">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul Kegiatan</th>
                        <th>isi Kegiatan</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @forelse ($kegiatan as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->judul_kegiatan }}</td>
                        <td>{{ $item->short }}</td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                    data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ route('kegiatan.kegiatan.edit',['kegiatan'=>$item]) }}"><i
                                            class="bx bx-edit-alt me-1"></i>
                                        Edit</a>
                                    <form
                                        action="{{ route('kegiatan.kegiatan.destroy',['kegiatan'=>$item]) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="dropdown-item" href="javascript:void(0);"><i
                                                class="bx bx-trash me-1"></i>
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