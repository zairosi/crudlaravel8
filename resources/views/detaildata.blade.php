@extends('layout.admin')
@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Lengkap Mahasiswa</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item"><a href="/mahasiswa">Data Mahasiswa</a></li>
                        <li class="breadcrumb-item active">Detail Data</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{ asset('fotomahasiswa/'.$data->foto) }}" style="width: 100%">
                                <a href="{{ asset('fotomahasiswa/'.$data->foto) }}" class="btn btn-xs btn-success mt-1" style="width: 100%" download="">
                                    <i class="fas fa-download"></i>
                                    Download Foto
                                </a>
                            </div>
                            <div class="col-md-6">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <strong>Nama</strong>
                                            </td>
                                            <td>:</td>
                                            <td>
                                                {{$data->nama}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Jenis Kelamin</strong>
                                            </td>
                                            <td>:</td>
                                            <td>
                                                {{$data->jenis_kelamin}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Tempat Lahir</strong>
                                            </td>
                                            <td>:</td>
                                            <td>
                                                {{$data->tempat_lahir}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Tanggal Lahir</strong>
                                            </td>
                                            <td>:</td>
                                            <td>
                                                {{$data->tanggal_lahir}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Alamat</strong>
                                            </td>
                                            <td>:</td>
                                            <td>
                                                {{$data->alamat}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Nomor Telepon</strong>
                                            </td>
                                            <td>:</td>
                                            <td>
                                                0{{$data->telepon}}
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
@endsection
