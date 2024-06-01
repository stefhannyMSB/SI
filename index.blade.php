@extends('layouts.app')

@section('content')
    <div class="row mx-3 my-1">
        <h2 class="text-dark">DATA PEGAWAI</h2>
    </div>
    {{-- alert --}}
    @if (Session::has('success'))
        <div id="successAlert" class="alert alert-success" role="alert">

            <button id="closeButton" class="close-button" onclick="closeAlert()">&times;</button>
        </div>
    @endif

    <script>
        function closeAlert() {
            document.getElementById('successAlert').style.display = 'none';
        }
    </script>
    <div class="row">
        <div class="col-md">
            <a href="{{ route('pegawai.create') }}" class="btn btn-dark btn-sm mb-2 mx-3"><i
                    class="fa fa-users"aria-hidden="true"></i>&nbsp;Tambah Data</a>
            <a href="{{ route('pegawai.report') }}" target="_blank" class="btn btn-success btn-sm mb-2"><i class="fa fa-print" aria-hidden="true"></i>&nbsp;Cetak
                Data</a>
            <div class="card shadow py-2 px-2">
                <div class="card-header my-1 mx-1">
                    <table id="example" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th sfcope="col">Nama Pegawai</th>
                                <th scope="col">Tempat Lahir</th>
                                <th scope="col">Tanggal Lahir</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">No.Telpon</th>
                                <th scope="col">Agama</th>
                                <th scope="col">Jabatan</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pegawai as $pegawai)
                                <tr>
                                    <td class="align-middle">{{ $loop->index + 1 }}</td>
                                    <td class="align-middle">{{ $pegawai->nama }}</td>
                                    <td class="align-middle">{{ $pegawai->tempat_lahir }}</td>
                                    <td class="align-middle">{{ $pegawai->tgl_lahir }}</td>
                                    <td class="align-middle">{{ $pegawai->alamat }}</td>
                                    <td class="align-middle">{{ $pegawai->no_telp }}</td>
                                    <td class="align-middle">{{ $pegawai->agama }}</td>
                                    <td class="align-middle">{{ $pegawai->jabatan }}</td>
                                    <td class="align-middle">
                                        {{-- <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="{{route(pegawai.edit)}}" type="button" class="btn btn-warning">Update</a>
                                            <form action="{{ route('pegawai.destroy', $pegawai->id_pegawai) }}" method="POST"
                                                class="btn btn-danger"
                                                onsubmit="return confirm('Apakah Anda yakin ingin menghapus ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger p-0 mb-1">Delete</button>
                                            </form>
                                        </div> --}}
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="{{ route('pegawai.edit', $pegawai->id_pegawai) }}" type="button"
                                                class="btn btn-warning">Update</a>
                                            <form action="{{ route('pegawai.destroy', $pegawai->id_pegawai) }}" method="POST">
                                                {{-- cross site ruquest forgery memverifikasi bahwa pengguna yang membuat permintaan --}}
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger"
                                                    onclick="return confirm('Yakin Ingin Dihapus?')">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
