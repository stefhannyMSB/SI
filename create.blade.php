@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-secondary">Tambah Data Siswa</h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <form action="{{ route('murid.store') }}" method="POST">
                            @csrf
                            <div class="row mx-2 my-2">
                                <div class="table">
                                    <label for="NIS">NIS</label>
                                    <input type="text" name="NIS" id="NIS" class="form-control" placeholder=""
                                        aria-label="First">
                                </div>
                                <div class="table">
                                    <label for="nama">Nama</label>
                                    <input type="text" name="nama" id="nama" class="form-control" placeholder=""
                                        aria-label="First">
                                </div>
                                <div class="table">
                                    <label for="tempat_lahir">Tempat Lahir</label>
                                    <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control"
                                        placeholder="" aria-label="First">
                                </div>
                                <div class="table">
                                    <label for="tgl_lahir">Tanggal Lahir</label>
                                    <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control"
                                        placeholder="" aria-label="First">
                                </div>
                                <div class="table">
                                        <label for="jenis_kelamin">Jenis Kelamin</label>
                                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                            <option value="Pilih">Pilih</option>
                                            <option value="Laki Laki">Laki Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                </div>
                                <div class="table">
                                        <label for="agama">Agama</label>
                                        <select name="agama" id="agama" class="form-control">
                                            <option value="Pilih">Pilih</option>
                                            <option value="Islam">Islam</option>
                                            <option value="Kristen">Kristen</option>
                                            <option value="Katholik">katholik</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Budha">Budha</option>
                                        </select>
                                    </div>
                                <div class="table">
                                    <label for="id_jurusan">Jurusan</label>
                                    <select class="form-control" name="id_jurusan" id="id_jurusan">
                                        <option hidden>Pilih Jurusan</option>
                                        <option disabled="disabled" default="true">Pilih Jurusan</option>
                                        @foreach ($jurusan as $item)
                                            <option value="{{ $item->id_jurusan }}"
                                                @if (old('id_jurusan') == $item->id_jurusan) selected @endif>{{ $item->jurusan }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="table">
                                    <div class="form-group">
                                        <label for="ekstrakurikuler">Ekstrakurikuler</label>
                                        <select name="ekstrakurikuler" id="ekstrakurikuler" class="form-control">
                                            <option value="Pilih">Pilih</option>
                                            <option value="Olahraga">Olahraga</option>
                                            <option value="Seni">Seni</option>
                                            <option value="Musik">Musik</option>
                                            <option value="Bahasa">Bahasa</option>
                                            <option value="Sains">Sains</option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div class="table">
                                    <button type="submit" class="btn btn-dark">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
