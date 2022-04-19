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
    <title>Form Tambah Buku</title>
</head>
<body>
<center>
    <div class="container-fluid">
        <div class="container position-center">
            <div class="row page-bg">
                <div class="p-4 col-md-12">
                    <div class="text-center top-icon">
                        <h3 class="mt-3">Tambah Buku Baru</h3>
                        <br>
                        @if (Session::has('error'))
                            <div class="alert alert-danger">{{ Session::get('error') }}</div>
                        @endif

                        @if (Session::has('wrongUsername'))
                            <div class="alert alert-danger">{{ Session::get('wrongUsername') }}</div>
                        @endif

                        <form id="form-login" action="{{ route('artikel.buat-data') }}" method="post">
                            @csrf
                            {{--judul buku  --}}
                            <div>
                                <input class="mt-3 form-control form-control-lg" name="judul" type="text"
                                       placeholder="Judul Buku" autofocus required>
                            </div>
                            @error('judul')
                            <div class="alert alert-danger">
                                Judul Buku Salah
                            </div>
                            @enderror
                            {{-- tahun terbit --}}
                             <div>
                                <input class="mt-3 form-control form-control-lg @error('tahun') is-invalid @enderror" name="tahun" type="text"
                                       placeholder="Tahun Terbit" autofocus required>
                            </div>
                            @error('tahun')
                            <div class="alert alert-danger">
                                Tahun Terbit Salah
                            </div>
                            @enderror
                            {{-- penulis --}}
                            <div>
                                <input class="mt-3 form-control form-control-lg @error('penulis') is-invalid @enderror" name="penulis" type="text"
                                       placeholder="Penulis" autofocus required>
                            </div>

                            @error('penulis')
                            <div class="alert alert-danger">
                                Nama Penulis Salah
                            </div>
                            @enderror
                            {{-- status buku --}}
                            {{-- <div class="mt-3">
                                <select name="status" id="status" class="form-control">
                                    <option value="">Pilih Status Buku</option>
                                    <option value="">Tersedia</option>
                                    <option value="">Sedang Dipinjam</option>
                                </select>
                            </div> --}}
                             <div>
                                <input class="mt-3 form-control form-control-lg @error('genre') is-invalid @enderror" name="genre" type="text"
                                       placeholder="Genre Buku" autofocus required>
                            </div>
                            @error('genre')
                            <div class="alert alert-danger">
                                Genre Salah
                            </div>
                            @enderror
{{--                             
                            @error('isi')
                            <div class="alert alert-danger">
                                Password Salah
                            </div>
                            @enderror --}}
                        </form>
                        <br>
                        <div class="mt-4 text-center submit-btn">
                            <button type="submit" class="btn btn-primary" form="form-login">Tambah Buku</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</center>
</body>
</html>
