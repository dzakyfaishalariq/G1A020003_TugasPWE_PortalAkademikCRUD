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
                @if(session()->has('success'))
                    <div class="alert alert-success text-white text-center" role="alert">
                        {{session('success')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <table class="table align-items-center mb-0">
                <thead>
                    <tr>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Npm</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Alamat</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kelas</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama orang tua</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Perkerjaan orang tua</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tempat tinggal</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No. Telp</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">goldar</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($studens as $mhs)
                    <tr>
                        <td>
                            {{ $mhs->id }}
                        </td>
                        <td>
                            {{ $mhs->nama }}
                        </td>
                        <td class="align-middle text-center text-sm">
                            {{ $mhs->email }}
                        </td>
                        <td class="align-middle text-center">
                            <span class="badge badge-sm bg-gradient-success">{{ $mhs->npm }}</span>
                        </td>
                        <td class="align-middle">
                            <span class="text-secondary text-xs font-weight-bold">{{ $mhs->alamat }}</span>
                        </td>
                        <td class="align-middle">
                            <span class="text-secondary text-xs font-weight-bold">{{ $mhs->kelas }}</span>
                        </td>
                        <td class="align-middle">
                            <span class="text-secondary text-xs font-weight-bold">{{ $mhs->nama_orang_tua }}</span>
                        </td>
                        <td class="align-middle">
                            <span class="text-secondary text-xs font-weight-bold">{{ $mhs->perkerjaan_orang_tua }}</span>
                        </td>
                        <td class="align-middle">
                            <span class="text-secondary text-xs font-weight-bold">{{ $mhs->tempat_tinggal }}</span>
                        </td>
                        <td class="align-middle">
                            <span class="text-secondary text-xs font-weight-bold">{{ $mhs->no_telp }}</span>
                        </td>
                        <td class="align-middle">
                            <span class="badge badge-sm bg-info">{{ $mhs->goldar }}</span>
                        </td>
                        <td class="align-middle">
                            <!---
                            <a href="/mahasiswa/edit/{{ $mhs->id }}" class=" btn btn-warning text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            Edit
                            </a>
                            --->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                edit
                            </button>
                            <a href="/mahasiswa/hapus/{{ $mhs->id }}" class=" btn btn-danger text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            Delete
                            </a>
                        </td>
                    </tr>
                    <!--- modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ubah data anda</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="/mahasiswa/ubah/{{ $mhs->id }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Nama : </label>
                                        <input type="text" class="form-control bg-danger text-white" id="exampleInputEmail1" placeholder="nama" required name="nama" value="{{ $mhs->nama }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email : </label>
                                        <input type="email" class="form-control bg-danger text-white" id="exampleInputEmail1" placeholder="email" required name="email" value="{{ $mhs->email }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">NPM : </label>
                                        <input type="text" class="form-control bg-danger text-white" id="exampleInputEmail1" placeholder="npm" required name="npm" value="{{ $mhs->npm }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Alamat : </label>
                                        <input type="text" class="form-control bg-danger text-white" id="exampleInputEmail1" placeholder="alamat" required name="alamat" value="{{ $mhs->alamat }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Kelas : </label>
                                        <input type="text" class="form-control bg-danger text-white" id="exampleInputEmail1" placeholder="kelas" required name="kelas" value="{{ $mhs->kelas }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Nama Orang tua : </label>
                                        <input type="text" class="form-control bg-danger text-white" id="exampleInputEmail1" placeholder="namaOrangTua" required name="nama_orang_tua" value="{{ $mhs->nama_orang_tua }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Perkerjaan orang tua : </label>
                                        <input type="text" class="form-control bg-danger text-white" id="exampleInputEmail1" placeholder="prkerjaanOrangTua" required name="perkerjaan_orang_tua" value="{{ $mhs->perkerjaan_orang_tua }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Tempat tinggal : </label>
                                        <input type="text" class="form-control bg-danger text-white" id="exampleInputEmail1" placeholder="tempatTinggal" required name="tempat_tinggal" value="{{ $mhs->tempat_tinggal}}" >
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">No Telpon : </label>
                                        <input type="text" class="form-control bg-danger text-white" id="exampleInputEmail1" placeholder="noTelpon" required name="no_telp" value="{{ $mhs->no_telp }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Golongan Darah : </label>
                                        <input type="text" class="form-control bg-danger text-white" id="exampleInputEmail1" placeholder="goldar" required name="goldar" value="{{ $mhs->goldar }}">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Kirim</button>
                                </form>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                        </div>
                    </div>
                <!--- endmodal   --->
                    @endforeach                    
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="12">
                            <div class="text-center">
                            <ul class="pagination pagination-rounded justify-content-center m-0">
                                <li class="page-item">
                                <a class="btn btn-success" href="/mahasiswa">Tambah</a>
                                </li>
                            </ul>
                            </div>
                        </td>
                    </tr>
                </tfoot>
                </table>
            </div>
            </div>
        </div>
        </div>
    </div>
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
                <table class="table align-items-center justify-content-center mb-0">
                <thead>
                    <tr>
                    <th class=" text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                    <th class=" text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama Prodi</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Alamat</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Fakultas</th>
                    <th class="text-center" >aksi</th>
                    </tr>
                </thead>
                    <tbody>
                        @foreach ($prodi as $pro)
                        <tr>
                            <td class=" text-center">
                                {{ $pro->id }}
                            </td>
                            <td class=" text-center">
                                {{ $pro->nama_prodi }}
                            </td>
                            <td class="align-middle text-center text-sm">
                                {{ $pro->alamat }}
                            </td>
                            <td class="align-middle text-center">
                                <span class="badge badge-sm bg-gradient-success">{{ $pro->fakultas }}</span>
                            </td>
                            <td class="align-middle">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#model2">
                                    edit
                                </button>
                                <a href="/prodi/hapus/{{ $pro->id }}" class=" btn btn-danger text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                Delete
                                </a>
                            </td>
                        </tr>
                        <!--- model ---->
                    <div class="modal fade" id="model2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="/prodi/edit/{{ $pro->id }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Nama prodi : </label>
                                        <input type="text" class="form-control bg-danger text-white" id="exampleInputEmail1" placeholder="nama_prodi" required name="nama_prodi" value="{{ $pro->nama_prodi }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Alamat : </label>
                                        <input type="text" class="form-control bg-danger text-white" id="exampleInputEmail1" placeholder="alamat" required name="alamat" value="{{ $pro->alamat }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Fakultas : </label>
                                        <input type="text" class="form-control bg-danger text-white" id="exampleInputEmail1" placeholder="fakultas" required name="fakultas" value="{{ $pro->fakultas }}">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Kirim</button>
                                </form>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                        </div>
                    </div>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="12">
                                <div class="text-center">
                                <ul class="pagination pagination-rounded justify-content-center m-0">
                                    <li class="page-item">
                                    <a class="btn btn-success" href="/prodi">Tambah</a>
                                    </li>
                                </ul>
                                </div>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            </div>
        </div>
        </div>
    </div>
@endsection