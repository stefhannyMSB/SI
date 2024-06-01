@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-dark">Update Data Guru</h6>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <form action="{{ route('guru.update', $guru->id_guru) }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="row mx-2 my-2">
                            <div class="table">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" class="form-control" placeholder=""
                                    aria-label="First" value="{{ old('nama', $guru->nama) }}">
                            </div>
                            <br>
                            <div class="table">
                                <label for="alamat">Alamat</label>
                                <input type="text" name="alamat" class="form-control" placeholder=""
                                    aria-label="First" value="{{ old('alamat', $guru->alamat) }}">
                            </div>
                            <br>
                            <div class="table">
                                <label for="tempat_lahir">Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" class="form-control" placeholder=""
                                    aria-label="First" value="{{ old('tempat_lahir', $guru->tempat_lahir) }}">
                            </div>
                            <br>
                            <div class="table">
                                <label for="tgl_lahir">Tanggal Lahir</label>
                                <input type="date" name="tgl_lahir" class="form-control" placeholder=""
                                    aria-label="First" value="{{ old('tgl_lahir', $guru->tgl_lahir) }}">
                            </div>
                            <br>
                            <div class="table">
                                <label for="agama">Agama</label>
                                <select name="agama" id="agama" class="form-control">
                                    <option value="Pilih">Pilih</option>
                                    <option value="Islam" @if($guru->agama == "Islam") selected @endif>Islam</option>
                                    <option value="Kristen" @if($guru->agama == "Kristen") selected @endif>Kristen</option>
                                    <option value="Katholik" @if($guru->agama == "katholik") selected @endif>katholik</option>
                                    <option value="Hindu" @if($guru->agama == "Hindu") selected @endif>Hindu</option>
                                    <option value="Budha" @if($guru->agama == "Budha") selected @endif>Budha</option>
                                </select>
                            </div>
                            <br>
                            <div class="table">
                                <label for="pengajar">Pengajar</label>
                                <input type="text" name="pengajar" class="form-control" placeholder=""
                                    aria-label="First" value="{{ old('pengajar', $guru->pengajar) }}">
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
