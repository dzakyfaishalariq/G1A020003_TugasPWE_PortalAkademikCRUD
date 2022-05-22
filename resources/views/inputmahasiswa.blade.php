@extends('area_utama.main')
@section('content')
<div class="row">
    <div class="col-12">
    <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
            <h6 class="text-white text-capitalize ps-3">Mahasiswa</h6>
        </div>
        </div>
        <div class="card-body px-0 pb-2">
        <div class="table-responsive p-0">
            <form action="/mahasiswa/tambah" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama : </label>
                    <input type="text" class="form-control bg-danger text-white" id="exampleInputEmail1" placeholder="nama" required name="nama">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email : </label>
                    <input type="email" class="form-control bg-danger text-white" id="exampleInputEmail1" placeholder="email" required name="email">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">NPM : </label>
                    <input type="text" class="form-control bg-danger text-white" id="exampleInputEmail1" placeholder="npm" required name="npm">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Alamat : </label>
                    <input type="text" class="form-control bg-danger text-white" id="exampleInputEmail1" placeholder="alamat" required name="alamat">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Kelas : </label>
                    <input type="text" class="form-control bg-danger text-white" id="exampleInputEmail1" placeholder="kelas" required name="kelas">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Orang tua : </label>
                    <input type="text" class="form-control bg-danger text-white" id="exampleInputEmail1" placeholder="namaOrangTua" required name="nama_orang_tua">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Perkerjaan orang tua : </label>
                    <input type="text" class="form-control bg-danger text-white" id="exampleInputEmail1" placeholder="prkerjaanOrangTua" required name="perkerjaan_orang_tua">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tempat tinggal : </label>
                    <input type="text" class="form-control bg-danger text-white" id="exampleInputEmail1" placeholder="tempatTinggal" required name="tempat_tinggal">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">No Telpon : </label>
                    <input type="text" class="form-control bg-danger text-white" id="exampleInputEmail1" placeholder="noTelpon" required name="no_telp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Golongan Darah : </label>
                    <input type="text" class="form-control bg-danger text-white" id="exampleInputEmail1" placeholder="goldar" required name="goldar">
                </div>
                <button type="submit" class="btn btn-primary">Kirim</button>
            </form>
        </div>
        </div>
    </div>
    </div>
</div>
@endsection