@extends('layouts.dashboard.main')
@section('content')
<div class="row row-cols-1 row-cols-md-3 g-4 mb-5">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">title</h2>
                <img class="card-img-top" src="#" />
            <p class="mt-2">Action : </p>
            <button type="button" class="btn btn-success rounded-pill btn-icon">
                <span class="tf-icons bx bx-show"></span>
            </button>
            <button type="button" class="btn btn-dark rounded-pill btn-icon">
                <span class="tf-icons bx bx-pencil"></span>
            </button>
            <button type="button" class="btn btn-danger rounded-pill btn-icon">
                <span class="tf-icons bx bx-x"></span>
            </button>
            </div>
        </div>
    </div>
</div>
@endsection