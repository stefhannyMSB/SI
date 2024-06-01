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
    <title>Cetak Data Siswa</title>
</head>

<body>
    <div class="form-group">
        <p align="center"><b>Laporan Data Siswa</b></p>
        <p align="center"><b>SI akademik</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
            <tr>
                <th scope="col">No</th>
                <th scope="col">NIS</th>
                <th scope="col">Nama Murid</th>
                <th scope="col">Tempat Lahir</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Agama</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Ekstrakurikuler</th>
            </tr>
            @foreach ($murid as $murid)
                <tr>
                    <td class="align-middle">{{ $loop->index + 1 }}</td>
                    <td class="align-middle">{{ $murid->NIS }}</td>
                    <td class="align-middle">{{ $murid->nama }}</td>
                    <td class="align-middle">{{ $murid->tempat_lahir }}</td>
                    <td class="align-middle">{{ $murid->tgl_lahir }}</td>
                    <td class="align-middle">{{ $murid->jenis_kelamin }}</td>
                    <td class="align-middle">{{ $murid->agama }}</td>
                    <td class="align-middle">{{ $murid->jurusan['jurusan'] }}</td>
                    <td class="align-middle">{{ $murid->ekstrakurikuler }}</td>
                </tr>
            @endforeach
        </table>
    </div>
    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>
