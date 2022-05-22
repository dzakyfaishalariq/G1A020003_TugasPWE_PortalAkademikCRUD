<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Portal akademik|{{ $title }}</title>
</head>
<body>
    <div class="container">
        <div class="row">
        <div class="col-12">
        <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Mahasiswa</h6>
            </div>
            </div>
            <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
                <form action="/mahasiswa/ubah/{{ $studen->id }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama : </label>
                        <input type="text" class="form-control bg-danger text-white" id="exampleInputEmail1" placeholder="nama" required name="nama" value="{{ $studen->nama }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email : </label>
                        <input type="email" class="form-control bg-danger text-white" id="exampleInputEmail1" placeholder="email" required name="email" value="{{ $studen->email }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">NPM : </label>
                        <input type="text" class="form-control bg-danger text-white" id="exampleInputEmail1" placeholder="npm" required name="npm" value="{{ $studen->npm }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Alamat : </label>
                        <input type="text" class="form-control bg-danger text-white" id="exampleInputEmail1" placeholder="alamat" required name="alamat" value="{{ $studen->alamat }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Kelas : </label>
                        <input type="text" class="form-control bg-danger text-white" id="exampleInputEmail1" placeholder="kelas" required name="kelas" value="{{ $studen->kelas }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Orang tua : </label>
                        <input type="text" class="form-control bg-danger text-white" id="exampleInputEmail1" placeholder="namaOrangTua" required name="nama_orang_tua" value="{{ $studen->nama_orang_tua }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Perkerjaan orang tua : </label>
                        <input type="text" class="form-control bg-danger text-white" id="exampleInputEmail1" placeholder="prkerjaanOrangTua" required name="perkerjaan_orang_tua" value="{{ $studen->perkerjaan_orang_tua }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tempat tinggal : </label>
                        <input type="text" class="form-control bg-danger text-white" id="exampleInputEmail1" placeholder="tempatTinggal" required name="tempat_tinggal" value="{{ $studen->tempat_tinggal}}" >
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">No Telpon : </label>
                        <input type="text" class="form-control bg-danger text-white" id="exampleInputEmail1" placeholder="noTelpon" required name="no_telp" value="{{ $studen->no_telp }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Golongan Darah : </label>
                        <input type="text" class="form-control bg-danger text-white" id="exampleInputEmail1" placeholder="goldar" required name="goldar" value="{{ $studen->goldar }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </form>
            </div>
            </div>
        </div>
        </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>
