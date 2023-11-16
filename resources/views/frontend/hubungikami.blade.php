@extends('layouts.main')
@section('content')
<div class="container-fluid">
    <h1 class="text-oren text-center text-capitalize mt-3 text-decoration-underline">HUBUNGI KAMI</h1>
    <div class="row mt-3">
        <div class="col-md-6">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1186.027274359306!2d100.35043471886581!3d-0.919690474246582!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b8d2a49ad5b9%3A0x95dd58e7dcacf05c!2sJl.%20S.%20Parman%20No.119%2C%20Lolong%20Belanti%2C%20Kec.%20Padang%20Utara%2C%20Kota%20Padang%2C%20Sumatera%20Barat%2025136!5e0!3m2!1sid!2sid!4v1700155671792!5m2!1sid!2sid"
                width="600" height="450" class="p-2 img-thumbnail" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
                <h5>Alamat : Jl. S. Parman No. 118B KOTA PADANG SUMATERA BARAT</h5>
                <h5>Email : sumbar@abujapi.or.id</h5>
        </div>
        <div class="col-md-6">
            <form action="#">
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama / Instansi</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="isi" class="form-label">Isi Pesan</label>
                    <textarea class="form-control" id="isi" name="isi" rows="3"></textarea>
                </div>
                <div class="mb-2">
                    <button class="btn btn-secondary" type="reset">Reset</button>
                    <button class="btn btn-primary" disabled type="submit">Kirim</button>
                </div>
                {{-- <div class="row g-3 allign-items-end">
                    <div class="col-auto">
                        <button>Reset</button>
                    </div>
                    <div class="col-auto">
                        <button>Kirim</button>
                    </div>
                </div> --}}
            </form>
        </div>
    </div>
</div>
@endsection