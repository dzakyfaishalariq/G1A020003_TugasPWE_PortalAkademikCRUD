@extends('area_utama.main')
@section('content')
<div class="row">
    <div class="col-12">
    <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
            <h6 class="text-white text-capitalize ps-3">Prodi</h6>
        </div>
        </div>
        <div class="card-body px-0 pb-2">
        <div class="table-responsive p-0">
            <form action="/prodi/tambah" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama prodi : </label>
                    <input type="text" class="form-control bg-danger text-white" id="exampleInputEmail1" placeholder="nama_prodi" required name="nama_prodi">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Alamat : </label>
                    <input type="text" class="form-control bg-danger text-white" id="exampleInputEmail1" placeholder="alamat" required name="alamat">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Fakultas : </label>
                    <input type="text" class="form-control bg-danger text-white" id="exampleInputEmail1" placeholder="fakultas" required name="fakultas">
                </div>
                <button type="submit" class="btn btn-primary">Kirim</button>
            </form>
        </div>
        </div>
    </div>
    </div>
</div>
@endsection