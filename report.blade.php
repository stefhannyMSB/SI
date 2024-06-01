<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        table.static {
            position: relative;
            border: 1px;
        }
    </style>
    <title>Cetak Data Jurusan</title>
</head>
<body>
    <div class="form-group">
        <p align="center"><b>Laporan Data Guru</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Guru</th>
                <th scope="col">Alamat</th>
                <th scope="col">Tempat Lahir</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Agama</th>
                <th scope="col">Pengajar</th>
            </tr>
            @foreach ($guru as $guru)
            <tr>
                <td class="align-middle">{{ $loop->index + 1 }}</td>
                <td class="align-middle">{{ $guru->nama }}</td>
                <td class="align-middle">{{ $guru->alamat }}</td>
                <td class="align-middle">{{ $guru->tempat_lahir }}</td>
                <td class="align-middle">{{ $guru->tgl_lahir }}</td>
                <td class="align-middle">{{ $guru->agama }}</td>
                <td class="align-middle">{{ $guru->pengajar }}</td>
            </tr>
            @endforeach
        </table>
    </div>
    <script type="text/javascript">
        window.print();
    </script>
</body>
</body>
</html>
