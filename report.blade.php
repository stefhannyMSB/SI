<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        table.static {
            position: relative;
            border: 1px;
        }
    </style>
    <title>Cetak Data Pegawai</title>
</head>

<body>
    <div class="form-group">
        <p align="center"><b>Laporan Data Pegawai</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Pegawai</th>
                <th scope="col">Tempat Lahir</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Alamat</th>
                <th scope="col">No.Telpon</th>
                <th scope="col">Agama</th>
                <th scope="col">Jabatan</th>
            </tr>
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
                </tr>
            @endforeach
        </table>
    </div>
    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>
