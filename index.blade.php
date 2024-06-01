@extends('layouts.app')

@section('content')
    <div class="row mx-3 my-1">
        <h2 class="text-dark">DATA WALIMURID</h2>
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
            <a href="{{ route('walimurid.create') }}" class="btn btn-dark btn-sm mb-2 mx-3"><i
                    class="fa fa-users"aria-hidden="true"></i>&nbsp;Tambah Data</a>
            <a href="#" class="btn btn-success btn-sm mb-2"><i class="fa fa-print" aria-hidden="true"></i>&nbsp;Cetak
                Data</a>
            <div class="card shadow py-2 px-2">
                <div class="card-header my-1 mx-1">
                    <table id="example" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Murid</th>
                                <th scope="col">Nama Ibu</th>
                                <th scope="col">Pekerjaan Ibu</th>
                                <th scope="col">Penhasilan Ibu</th>
                                <th scope="col">Alamat Ibu</th>
                                <th scope="col">Telfon ibu</th>
                                <th scope="col">Nama Ayah</th>
                                <th scope="col">Pekerjaan Ayah</th>
                                <th scope="col">Penhasilan Ayah</th>
                                <th scope="col">Alamat Ayah</th>
                                <th scope="col">Telfon Ayah</th>
                                <th scope="col">Nama Wali</th>
                                <th scope="col">Pekerjaan Wali</th>
                                <th scope="col">Penhasilan Wali</th>
                                <th scope="col">Alamat Wali</th>
                                <th scope="col">Telfon Wali</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($walimurid as $walimurid)
                                <tr>
                                    <td class="align-middle">{{ $loop->index + 1 }}</td>
                                    <td class="align-middle">{{ $walimurid->id_murid }}</td>
                                    <td class="align-middle">{{ $walimurid->nama_ibu }}</td>
                                    <td class="align-middle">{{ $walimurid->pekerjaan_ibu }}</td>
                                    <td class="align-middle">{{ $walimurid->penghasilan_ibu }}</td>
                                    <td class="align-middle">{{ $walimurid->alamat_ibu }}</td>
                                    <td class="align-middle">{{ $walimurid->telp_ibu }}</td>
                                    <td class="align-middle">{{ $walimurid->nama_ayah }}</td>
                                    <td class="align-middle">{{ $walimurid->pekerjaan_ayah }}</td>
                                    <td class="align-middle">{{ $walimurid->penghasilan_ayah }}</td>
                                    <td class="align-middle">{{ $walimurid->alamat_ayah }}</td>
                                    <td class="align-middle">{{ $walimurid->telp_ayah }}</td>
                                    <td class="align-middle">{{ $walimurid->nama_wali }}</td>
                                    <td class="align-middle">{{ $walimurid->pekerjaan_wali }}</td>
                                    <td class="align-middle">{{ $walimurid->penghasilan_wali }}</td>
                                    <td class="align-middle">{{ $walimurid->alamat_wali }}</td>
                                    <td class="align-middle">{{ $walimurid->telp_wali }}</td>

                                    <td class="align-middle">
                                        {{-- <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="{{route(walimurid.edit)}}" type="button" class="btn btn-warning">Update</a>
                                            <form action="{{ route('walimurid.destroy', $walimurid->id_walimurid) }}" method="POST"
                                                class="btn btn-danger"
                                                onsubmit="return confirm('Apakah Anda yakin ingin menghapus ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger p-0 mb-1">Delete</button>
                                            </form>
                                        </div> --}}
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="{{ route('walimurid.edit', $walimurid->id_walimurid) }}" type="button"
                                                class="btn btn-warning">Update</a>
                                            <form action="{{ route('walimurid.destroy', $walimurid->id_walimurid) }}" method="POST">
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
