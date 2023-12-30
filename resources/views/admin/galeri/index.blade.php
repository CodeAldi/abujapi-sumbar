@extends('layouts.dashboard.main')
@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Upload Galeri</h5>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Judul item</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Judul" />
            </div>
            <div class="mb-3">
                <label for="exampleFormControlSelect1" class="form-label">Kategori</label>
                <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Upload Photo or Videos</label>
                <input class="form-control" type="file" id="formFile" />
            </div>
            <div>
                <button type="reset" class="btn btn-secondary">Cancel</button>
                <button type="submit" class="btn btn-primary">Upload</button>
            </div>
        </div>

    </div>
@endsection
@push('page-js')
    <script src="{{ asset('assets/js/form-basic-inputs.js') }}"></script>
@endpush