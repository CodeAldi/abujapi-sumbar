@extends('layouts.main')
@push('page-css')
<link href="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-1.13.8/sp-2.2.0/datatables.min.css" rel="stylesheet">
<script src="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-1.13.8/sp-2.2.0/datatables.min.js"></script>
@endpush
@section('content')
<div class="container">
    <h1 class="text-secondary text-center text-capitalize mt-5 text-decoration-underline">Daftar Nama Anggota</h1>
    <hr>
    <table class="table table-hover" id="mytable">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama BUJP</th>
                <th>Nama Pemimpin</th>
                <th>Status</th>
                <th>Alamat</th>
                <th>KTA ABUJAPI</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($anggota as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->badan_usaha }}</td>
                    <td>{{ $item->nama_pemimpin }}</td>
                    <td>{{ $item->status }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>{{ $item->KTA }}</td>
                </tr>
            @empty
                
            @endforelse
        </tbody>
    </table>
</div>
@push('page-js')
@endpush
<script>
    new DataTable('#mytable');
</script>
@endsection