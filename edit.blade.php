@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-dark">Update Data Pegawai</h6>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <form action="{{ route('pegawai.update', $pegawai->id_pegawai) }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="row mx-2 my-2">
                            <div class="table">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" id="nama" class="form-control" placeholder=""
                                    aria-label="First" value="{{ old('nama', $pegawai->nama) }}">
                            </div>
                            <br>
                            <div class="table">
                                <label for="tempat_lahir">Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" placeholder=""
                                    aria-label="First" value="{{ old('tempat_lahir', $pegawai->tempat_lahir) }}">
                            </div>
                            <br>
                            <div class="table">
                                <label for="tgl_lahir">Tanggal Lahir</label>
                                <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" placeholder=""
                                    aria-label="First" value="{{ old('tgl_lahir', $pegawai->tgl_lahir) }}">
                            </div>
                            <br>

                            <div class="table">
                                <label for="alamat">Alamat</label>
                                <input type="text" name="alamat" id="alamat" class="form-control" placeholder=""
                                    aria-label="First" value="{{ old('alamat', $pegawai->alamat) }}">
                            </div>
                            <br>
                            <div class="table">
                                <label for="no_telp">No. Telp</label>
                                <input type="text" name="no_telp" id="no_telp" class="form-control" placeholder=""
                                    aria-label="First" value="{{ old('no_telp', $pegawai->no_telp) }}">
                            </div>
                            <br>
                            <div class="table">
                                <label for="agama">Agama</label>
                                <select name="agama" id="agama" class="form-control">
                                    <option value="Pilih">-- Pilih --</option>
                                    <option value="Islam"  @if($pegawai->agama == "Islam") selected @endif > Islam</option>
                                    <option value="Kristen"  @if($pegawai->agama == "Kristen") selected @endif >Kristen</option>
                                    <option value="Katholik" @if($pegawai->agama == "Katholik") selected @endif >katholik </option>
                                    <option value="Hindu" @if($pegawai->agama == "Hindu") selected @endif >Hindu </option>
                                    <option value="Budha"  @if($pegawai->agama == "Budha") selected @endif >Budha</option>
                                </select>
                            </div>
                            <br>
                            <div class="table">
                                <label for="jabatan">Jabatan</label>
                                <select name="jabatan" id="jabatan" class="form-control">
                                    <option value="Pilih">-- Pilih --</option>
                                    <option value="Kepala Sekolah"  @if($pegawai->jabatan == "Kepala Sekola") selected @endif >Kepala Sekolah</option>
                                    <option value="Wakil Kepala_Sekolah"  @if($pegawai->jabatan == "Wakil Kepala Sekolah") selected @endif >Wakil Kepala Sekolah</option>
                                    <option value="Kepala Jurusan"  @if($pegawai->jabatan == "Kepala Jurusan") selected @endif >Kepala Jurusan</option>
                                    <option value="Guru" @if($pegawai->jabatan == "Guru") selected @endif >Guru </option>
                                    <option value="Pustakawan"  @if($pegawai->jabatan == "Pustakawan") selected @endif>Pustakawan</option>
                                    <option value="Tata Usaha"  @if($pegawai->jabatan == "Tata Usaha") selected @endif>Tata Usaha</option>
                                    <option value="Admin"  @if($pegawai->jabatan == "Admin") selected @endif>Admin </option>
                                    <option value="Cleaning Service"  @if($pegawai->jabatan == "Cleaning Service") selected @endif> Cleaning Service</option>
                                    <option value="Layanan Teknis"  @if($pegawai->jabatan == "Layanan Teknis") selected @endif>Layanan Teknis</option>

                                </select>
                            </div>
                            <br>
                        </div>
                            <button type="submit" class="btn btn-dark">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
