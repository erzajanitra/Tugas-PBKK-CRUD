{{-- <html>
<head>
	<title>CRUD Perpustakaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body> --}}
@extends('template')

@section('container')
    {{-- <div class="container"> --}}
        <div>
        <center><h3 class="mt-5">Data Buku Perpustakaan</h3></center>

        <a href="{{ route('artikel.tambah-data') }}" class="btn btn-primary mt-4 "><i class="fa fa-plus"></i> Tambah Buku Baru</a>

        <br/>
        <br/>
        @if (Session::has('tambah_data'))
            <div class="alert alert-success alert-dismissible fade show" role="alert" style="width: 100%; height:auto;">
                <strong><i class="fa fa-check-circle"></i> Berhasil!</strong>
                <br>
                    Penambahan Buku Berhasil
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                {{-- <button type="button" class="btn-close" data-bs-dismiss="alert"></button> --}}
                </button>
            </div>
        @endif

        @if (Session::has('edit_data'))
            <div class="alert alert-success alert-dismissible fade show" role="alert" style="width: 100%; height:auto;">
                <strong><i class="fa fa-check-circle"></i> Berhasil!</strong>
                <br>
                    Pengeditan Buku Berhasil
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                </button>
            </div>
        @endif

        @if (Session::has('hapus_data'))
            <div class="alert alert-success alert-dismissible fade show" role="alert" style="width: 100%; height:auto;">
                <strong><i class="fa fa-check-circle"></i> Berhasil!</strong>
                <br>
                    Penghapusan Buku Berhasil
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                </button>
            </div>
        @endif
        <table class="table mt-2">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Judul Buku</th>
                    <th>Tahun Terbit</th>
                    <th>Penulis</th>
                    <th>Genre</th>
                    <th>Action</th>
                </tr>
            </thead>
            @php
                $it = 1;
            @endphp
            @foreach($data as $d)
            <tr>
                <td>{{ $it }}</td>
                <td>{{ $d->judul }}</td>
                <td>{{ $d->tahun }}</td>
                <td>{{ $d->penulis }}</td>
                <td>{{ $d->genre }}</td>             
                {{-- <td>{{ $d->isi }}</td> --}}
                <td>
                    <form onsubmit="return confirm('Apakah Anda Yakin Menghapus Data ini ?');" action="{{ route('artikel.destroy', $d->id) }}" method="POST">
                        <a href="{{ Route('artikel.edit', $d->id) }}" class="btn btn-sm btn-primary shadow"><i class="fa fa-edit"></i> Edit</a>
                        |
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger shadow"><i class="fa fa-trash"></i> Delete</button>
                        |
                        <a href="{{ route('artikel.show' , $d->id) }}" class="btn btn-sm btn-secondary shadow"><i class="fa fa-info-circle"></i> Detail</a>
                    </form>
                </td>
            </tr>
            @php
                $it+=1;
            @endphp
            @endforeach
        </table>
    </div>
    @endsection
