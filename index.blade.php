@extends('layouts.app')

@section('content')
    <div class="row mx-3 my-1">
        <h2 class="text-dark">DATA JADWAL PELAJARAN</h2>
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
            <a href="{{ route('jadwal.create') }}" class="btn btn-dark btn-sm mb-2 mx-3"><i
                    class="fa fa-users"aria-hidden="true"></i>&nbsp;Tambah Data</a>
            <a href="{{ route('jadwal.report') }}" target="_blank" class="btn btn-success btn-sm mb-2"><i class="fa fa-print" aria-hidden="true"></i>&nbsp;Cetak
                Data</a>
            <div class="card shadow py-2 px-2">
                <div class="card-header my-1 mx-1">
                    <table id="example" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Hari</th>
                                <th scope="col">Waktu</th>
                                <th scope="col">Jurusan</th>
                                <th scope="col">Kelas</th>
                                <th scope="col">Mata Pelajaran</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($jadwal as $jadwal)
                                <tr>
                                    <td class="align-middle">{{ $loop->index + 1 }}</td>
                                    <td class="align-middle">{{ $jadwal->hari }}</td>
                                    <td class="align-middle">{{ $jadwal->waktu }}</td>
                                    <td class="align-middle">{{ $jadwal->jurusan['jurusan'] }}</td>
                                    <td class="align-middle">{{ $jadwal->kelas['kelas'] }}</td>
                                    <td class="align-middle">{{ $jadwal->matapelajaran['pelajaran'] }}</td>
                                    <td class="align-middle">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="{{ route('jadwal.edit', $jadwal->id_jadwal) }}" type="button"
                                                class="btn btn-warning">Update</a>
                                            <form action="{{ route('jadwal.destroy', $jadwal->id_jadwal) }}" method="POST">
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
