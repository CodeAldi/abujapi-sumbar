@extends('layouts.dashboard.main')
@section('content')
<div class="card h-100">
    <div class="card-header">
        <h2 class="card-title">Anggota</h2>
    </div>
    <div class="card-body">
        <div class="row d-flex gap-2 justify-content-end">
            <button href="javascript:void(0);" class="btn btn-success col-3" type="button" data-bs-toggle='modal'
                data-bs-target='#tambahsingle'>
                <i class='bx bx-user-plus'></i>
                Tambah (single)</button>
            {{-- <button href="javascript:void(0);" class="btn btn-success col-3" type="button" data-bs-toggle='modal'
                data-bs-target='#tambahmultiple'>
                <i class='bx bx-group'></i>
                Tambah (multiple)</button> --}}
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Badan Usahha</th>
                        <th>Nomor Sertifikat</th>
                        <th>Alamat</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @forelse ($anggota as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->badan_usaha }}</td>
                        <td>{{ $item->nomor_sertifikat }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#"><i
                                            class="bx bx-edit-alt me-1"></i>
                                        Edit</a>
                                    <form action="{{ route('anggota.destroy',['anggota'=>$item]) }}" method="POST">
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
                        <td colspan="5" class="text-white text-center bg-warning">No Data</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-center mt-3">
            {{ $anggota->links('pagination.my-pagination') }}
        </div>
        <!-- Modal -->
        <div class="modal fade" id="tambahmultiple" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="tambahmultipleTitle">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col mb-3">
                                <label for="nameWithTitle" class="form-label">Name</label>
                                <input type="text" id="nameWithTitle" class="form-control" placeholder="Enter Name" />
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col mb-0">
                                <label for="emailWithTitle" class="form-label">Email</label>
                                <input type="text" id="emailWithTitle" class="form-control" placeholder="xxxx@xxx.xx" />
                            </div>
                            <div class="col mb-0">
                                <label for="dobWithTitle" class="form-label">DOB</label>
                                <input type="text" id="dobWithTitle" class="form-control" placeholder="DD / MM / YY" />
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                            Close
                        </button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<!-- Modal -->
<div class="modal fade" id="tambahsingle" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahsingleTitle">Tambah Anggota</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('anggota.store') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col mb-3">
                            <label for="badan_usaha" class="form-label">Nama Badan Usaha</label>
                            <input type="text" id="badan_usaha" name="badan_usaha" class="form-control"
                                placeholder="Enter Name" />
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col mb-0">
                            <label for="nomor_sertifikat" class="form-label">Nomor Sertifikat</label>
                            <input type="text" id="nomor_sertifikat" name="nomor_sertifikat" class="form-control"
                                placeholder="xxxxx/xx-xx-xxxx" />
                        </div>
                        <div class="col mb-0">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" id="alamat" name="alamat" class="form-control"
                                placeholder="jl. xxx no xx rt xx rw xx" />
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    Close
                </button>
                <button type="submit" class="btn btn-primary">Tambah anggota</button>
            </div>
            </form>
        </div>
    </div>
</div>