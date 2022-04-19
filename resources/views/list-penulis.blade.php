
@extends('template')

@section('container')
    {{-- <div class="container"> --}}
        <div>
        <center><h3 class="mt-5">Data Penulis Buku</h3></center>

        <a href="{{ route('penulis.tambah-data-penulis') }}" class="btn btn-primary mt-4 "><i class="fa fa-plus"></i> Tambah Penulis Baru</a>

        <br/>
        <br/>
        @if (Session::has('tambah_data'))
            <div class="alert alert-success alert-dismissible fade show" role="alert" style="width: 100%; height:auto;">
                <strong><i class="fa fa-check-circle"></i> Berhasil!</strong>
                <br>
                    Penambahan Penulis Berhasil
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                {{-- <button type="button" class="btn-close" data-bs-dismiss="alert"></button> --}}
                </button>
            </div>
        @endif

        @if (Session::has('edit_data'))
            <div class="alert alert-success alert-dismissible fade show" role="alert" style="width: 100%; height:auto;">
                <strong><i class="fa fa-check-circle"></i> Berhasil!</strong>
                <br>
                    Pengeditan Penulis Berhasil
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                </button>
            </div>
        @endif

        @if (Session::has('hapus_data'))
            <div class="alert alert-success alert-dismissible fade show" role="alert" style="width: 100%; height:auto;">
                <strong><i class="fa fa-check-circle"></i> Berhasil!</strong>
                <br>
                    Penghapusan Penulis Berhasil
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                </button>
            </div>
        @endif
        <table class="table mt-2">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Nama Penulis</th>
                    <th>Jenis Kelamin</th>
                    <th>Tanggal Lahir</th>
                    <th>Biography</th>
                    <th>Action</th>
                </tr>
            </thead>
            @php
                $it = 1;
            @endphp
            @foreach($data as $d)
            <tr>
                <td>{{ $it }}</td>
                <td>{{ $d->nama }}</td>
                <td>{{ $d->jenisKelamin }}</td>
                <td>{{ $d->tanggalLahir }}</td>
                <td>{{ $d->about }}</td>             
                {{-- <td>{{ $d->isi }}</td> --}}
                <td>
                    <form onsubmit="return confirm('Apakah Anda Yakin Menghapus Data ini ?');" action="{{ route('penulis.destroy-penulis', $d->id) }}" method="POST">
                        <a href="{{ Route('penulis.edit-penulis', $d->id) }}" class="btn btn-sm btn-primary shadow"><i class="fa fa-edit"></i> Edit</a>
                        |
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger shadow"><i class="fa fa-trash"></i> Delete</button>
                        |
                        <a href="{{ route('penulis.show-penulis' , $d->id) }}" class="btn btn-sm btn-secondary shadow"><i class="fa fa-info-circle"></i> Detail</a>
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
