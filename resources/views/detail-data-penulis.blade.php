<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <title>Detail Penulis</title>
</head>
<body>
<center>
    <div class="container-fluid">
        <div class="container position-center">
            <div class="row page-bg">
                <div class="p-4 col-md-12">
                    <div class="text-center top-icon">
                        <h3 class="mt-3">Detail Penulis</h3>
                        <br>
                        @if (Session::has('isi'))
                            <div class="alert alert-danger">{{ Session::get('error') }}</div>
                        @endif
 
                        @if (Session::has('judul'))
                            <div class="alert alert-danger">{{ Session::get('wrongUsername') }}</div>
                        @endif
 
                        {{-- <form id="form-login" action="{{ route('artikel.buat-data') }}" method="get"> --}}
                            @csrf
                            {{-- judul --}}
                            <div>
                                <input class="mt-3 form-control form-control-lg" name="nama" type="text"
                                       placeholder="Nama Penulis" value="{{ $data->nama ? $data->nama : 'Tidak Ada Data' }}" readonly>
                            </div>
                             @error('nama')
                            <div class="alert alert-danger">
                                Nama Penulis Tidak Sesuai
                            </div>
                            @enderror
                            {{-- tahun --}}
                            <div>
                                <input class="mt-3 form-control form-control-lg" name="jenisKelamin" type="text"
                                       placeholder="Jenis Kelamin " value="{{ $data->jenisKelamin ? $data->jenisKelamin : 'Tidak Ada Data' }}" readonly>
                            </div>
                             @error('jenisKelamin')
                            <div class="alert alert-danger">
                                Jenis Kelamin Tidak Sesuai
                            </div>
                            @enderror
                            {{-- penulis --}}
                            <div>
                                <input class="mt-3 form-control form-control-lg" name="tanggalLahir" type="text"
                                       placeholder="Tanggal Lahir" value="{{ $data->tanggalLahir ? $data->tanggalLahir : 'Tidak Ada Data' }}" readonly>
                            </div>
                             @error('tanggalLahir')
                            <div class="alert alert-danger">
                                Tanggal Lahir Tidak Sesuai
                            </div>
                            @enderror
                            {{-- genre --}}
                            <div>
                                <input class="mt-3 form-control form-control-lg" name="about" type="text"
                                       placeholder="Biografi Penulis" value="{{ $data->about ? $data->about : 'Tidak Ada Data' }}" readonly>
                            </div>
                            @error('about')
                            <div class="alert alert-danger">
                                Biografi Tidak Sesuai
                            </div>
                            @enderror
                            {{-- <div>
                                <input class="mt-3 form-control form-control-lg" name="isi" type="text"
                                       placeholder="Isi" value="{{ $data->isi ? $data->isi : 'Tidak Ada Data' }}" readonly>
                            </div>
 
                            @error('isi')
                            <div class="alert alert-danger">
                                Password Salah
                            </div> --}}
                            {{-- @enderror --}}
                        {{-- </form> --}}
                        <br>
                        <div class="mt-4 text-center submit-btn">
                            <a href="{{ route('penulis.list-penulis') }}" class="btn btn-secondary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</center>
</body>
</html>