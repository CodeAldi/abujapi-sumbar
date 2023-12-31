@extends('layouts.dashboard.main')
@section('content')
<div class="card">
    <div class="card-header">
        <h5 class="card-title">kategori-galeri</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('gallery.kategori-gallery.store') }}" method="post">
            @csrf
            <div class="row d-flex justify-content-end">
                <div class="col-4"><input type="text" name="judul_kategori" class="form-control"></div>
                <button class="btn btn-success col-2">Tambah</button>
            </div>
        </form>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul Kategori</th>
                        <th>galeri dengan katgori ini</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @forelse ($kategoriGaleri as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->judul_kategori }}</td>
                        <td>{{ $countKategoriGaleri[$item->id] }}</td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                    data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <button class="dropdown-item" href="javascript:void(0);" data-bs-target='#edit_kategori_{{ $loop->iteration }}' data-bs-toggle='modal'><i
                                            class="bx bx-edit-alt me-1"></i>
                                        Edit</button>
                                    <form
                                        action="{{ route('gallery.kategori-gallery.destroy',['kategoriGaleri'=>$item]) }}"
                                        method="post">
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

@foreach ($kategoriGaleri as $item)
<div class="modal fade" id="edit_kategori_{{ $loop->iteration }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahsingleTitle">Edit Kategori Galeri</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('gallery.kategori-gallery.update',['kategoriGaleri'=>$item]) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col">
                            <label for="badan_usaha" class="form-label">Judul Kategori</label>
                            <input type="text" id="badan_usaha" name="judul_kategori" class="form-control"
                                value="{{ $item->judul_kategori }}" />
                        </div>
                    </div>
                    
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    Close
                </button>
                <button type="submit" class="btn btn-primary">Update Kategori</button>
            </div>
            </form>
        </div>
    </div>
</div>
@endforeach