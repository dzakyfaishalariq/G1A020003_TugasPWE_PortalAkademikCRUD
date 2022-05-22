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
                            <button type="button" class="btn btn-primary">Save changes</button>
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
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama Prodi</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Alamat</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Fakultas</th>
                    <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td>
                        <div class="d-flex px-2">
                        <div>
                            <img src="../assets/img/small-logos/logo-asana.svg" class="avatar avatar-sm rounded-circle me-2" alt="spotify">
                        </div>
                        <div class="my-auto">
                            <h6 class="mb-0 text-sm">Asana</h6>
                        </div>
                        </div>
                    </td>
                    <td>
                        <p class="text-sm font-weight-bold mb-0">$2,500</p>
                    </td>
                    <td>
                        <span class="text-xs font-weight-bold">working</span>
                    </td>
                    <td class="align-middle text-center">
                        <div class="d-flex align-items-center justify-content-center">
                        <span class="me-2 text-xs font-weight-bold">60%</span>
                        <div>
                            <div class="progress">
                            <div class="progress-bar bg-gradient-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                            </div>
                        </div>
                        </div>
                    </td>
                    <td class="align-middle">
                        <button class="btn btn-link text-secondary mb-0">
                        <i class="fa fa-ellipsis-v text-xs"></i>
                        </button>
                    </td>
                    </tr>
                    <tr>
                    <td>
                        <div class="d-flex px-2">
                        <div>
                            <img src="../assets/img/small-logos/github.svg" class="avatar avatar-sm rounded-circle me-2" alt="invision">
                        </div>
                        <div class="my-auto">
                            <h6 class="mb-0 text-sm">Github</h6>
                        </div>
                        </div>
                    </td>
                    <td>
                        <p class="text-sm font-weight-bold mb-0">$5,000</p>
                    </td>
                    <td>
                        <span class="text-xs font-weight-bold">done</span>
                    </td>
                    <td class="align-middle text-center">
                        <div class="d-flex align-items-center justify-content-center">
                        <span class="me-2 text-xs font-weight-bold">100%</span>
                        <div>
                            <div class="progress">
                            <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                            </div>
                        </div>
                        </div>
                    </td>
                    <td class="align-middle">
                        <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-ellipsis-v text-xs"></i>
                        </button>
                    </td>
                    </tr>
                    <tr>
                    <td>
                        <div class="d-flex px-2">
                        <div>
                            <img src="../assets/img/small-logos/logo-atlassian.svg" class="avatar avatar-sm rounded-circle me-2" alt="jira">
                        </div>
                        <div class="my-auto">
                            <h6 class="mb-0 text-sm">Atlassian</h6>
                        </div>
                        </div>
                    </td>
                    <td>
                        <p class="text-sm font-weight-bold mb-0">$3,400</p>
                    </td>
                    <td>
                        <span class="text-xs font-weight-bold">canceled</span>
                    </td>
                    <td class="align-middle text-center">
                        <div class="d-flex align-items-center justify-content-center">
                        <span class="me-2 text-xs font-weight-bold">30%</span>
                        <div>
                            <div class="progress">
                            <div class="progress-bar bg-gradient-danger" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="30" style="width: 30%;"></div>
                            </div>
                        </div>
                        </div>
                    </td>
                    <td class="align-middle">
                        <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-ellipsis-v text-xs"></i>
                        </button>
                    </td>
                    </tr>
                    <tr>
                    <td>
                        <div class="d-flex px-2">
                        <div>
                            <img src="../assets/img/small-logos/bootstrap.svg" class="avatar avatar-sm rounded-circle me-2" alt="webdev">
                        </div>
                        <div class="my-auto">
                            <h6 class="mb-0 text-sm">Bootstrap</h6>
                        </div>
                        </div>
                    </td>
                    <td>
                        <p class="text-sm font-weight-bold mb-0">$14,000</p>
                    </td>
                    <td>
                        <span class="text-xs font-weight-bold">working</span>
                    </td>
                    <td class="align-middle text-center">
                        <div class="d-flex align-items-center justify-content-center">
                        <span class="me-2 text-xs font-weight-bold">80%</span>
                        <div>
                            <div class="progress">
                            <div class="progress-bar bg-gradient-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="80" style="width: 80%;"></div>
                            </div>
                        </div>
                        </div>
                    </td>
                    <td class="align-middle">
                        <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-ellipsis-v text-xs"></i>
                        </button>
                    </td>
                    </tr>
                    <tr>
                    <td>
                        <div class="d-flex px-2">
                        <div>
                            <img src="../assets/img/small-logos/logo-slack.svg" class="avatar avatar-sm rounded-circle me-2" alt="slack">
                        </div>
                        <div class="my-auto">
                            <h6 class="mb-0 text-sm">Slack</h6>
                        </div>
                        </div>
                    </td>
                    <td>
                        <p class="text-sm font-weight-bold mb-0">$1,000</p>
                    </td>
                    <td>
                        <span class="text-xs font-weight-bold">canceled</span>
                    </td>
                    <td class="align-middle text-center">
                        <div class="d-flex align-items-center justify-content-center">
                        <span class="me-2 text-xs font-weight-bold">0%</span>
                        <div>
                            <div class="progress">
                            <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="0" style="width: 0%;"></div>
                            </div>
                        </div>
                        </div>
                    </td>
                    <td class="align-middle">
                        <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-ellipsis-v text-xs"></i>
                        </button>
                    </td>
                    </tr>
                    <tr>
                    <td>
                        <div class="d-flex px-2">
                        <div>
                            <img src="../assets/img/small-logos/devto.svg" class="avatar avatar-sm rounded-circle me-2" alt="xd">
                        </div>
                        <div class="my-auto">
                            <h6 class="mb-0 text-sm">Devto</h6>
                        </div>
                        </div>
                    </td>
                    <td>
                        <p class="text-sm font-weight-bold mb-0">$2,300</p>
                    </td>
                    <td>
                        <span class="text-xs font-weight-bold">done</span>
                    </td>
                    <td class="align-middle text-center">
                        <div class="d-flex align-items-center justify-content-center">
                        <span class="me-2 text-xs font-weight-bold">100%</span>
                        <div>
                            <div class="progress">
                            <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                            </div>
                        </div>
                        </div>
                    </td>
                    <td class="align-middle">
                        <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-ellipsis-v text-xs"></i>
                        </button>
                    </td>
                    </tr>
                </tbody>
                </table>
            </div>
            </div>
        </div>
        </div>
    </div>
@endsection