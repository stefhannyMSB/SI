@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-dark">Update Data Siswa</h6>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <form action="{{ route('murid.update',$murid->id_murid) }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="row mx-2 my-2">
                            <div class="table">
                                <label for="NIS">NIS</label>
                                <input type="text" name="NIS" id="NIS" class="form-control" placeholder=""
                                    aria-label="First" value="{{ old('NIS', $murid->NIS) }}">
                            </div>
                            <div class="table">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" id="nama" class="form-control" placeholder=""
                                    aria-label="First" value="{{ old('nama', $murid->nama) }}">
                            </div>
                            <div class="table">
                                <label for="tempat_lahir">Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control"
                                    placeholder="" aria-label="First" value="{{ old('tempat_lahir', $murid->tempat_lahir) }}">
                            </div>
                            <div class="table">
                                <label for="tgl_lahir">Tanggal Lahir</label>
                                <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control"
                                    placeholder="" aria-label="First" value="{{ old('tgl_lahir', $murid->tgl_lahir) }}">
                            </div>
                            <div class="table">
                                    <label for="jenis_kelamin">Jenis Kelamin</label>
                                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                        <option value="Pilih">Pilih</option>
                                        <option value="Laki Laki" @if($murid->jenis_kelamin =="Laki Laki") selected @endif>Laki Laki</option>
                                        <option value="Perempuan" @if($murid->jenis_kelamin =="Perempuan") selected @endif>Perempuan</option>
                                    </select>
                            </div>
                            <div class="table">
                                    <label for="agama">Agama</label>
                                    <select name="agama" id="agama" class="form-control">
                                        <option value="Pilih">Pilih</option>
                                        <option value="Islam" @if($murid->agama == "Islam") selected @endif>Islam</option>
                                        <option value="Kristen" @if($murid->agama == "Kristen") selected @endif>Kristen</option>
                                        <option value="Katholik" @if($murid->agama == "katholik") selected @endif>katholik</option>
                                        <option value="Hindu" @if($murid->agama == "Hindu") selected @endif>Hindu</option>
                                        <option value="Budha" @if($murid->agama == "Budha") selected @endif>Budha</option>
                                    </select>
                                </div>
                            <div class="table">
                                <label for="id_jurusan">Jurusan</label>
                                <select class="form-control" name="id_jurusan" id="id_jurusan">
                                    <option hidden>Pilih</option>
                                    <option disabled="disabled" default="true">Pilih Jurusan</option>
                                    @foreach ($jurusan as $id => $item)
                                    <option value="{{ $item->id_jurusan }}"
                                        {{ $item->jurusen == $id ? 'selected' : '' }}>{{ $item->jurusan }}
                                    </option>
                                @endforeach
                                </select>
                            </div>
                            <div class="table">
                                <div class="form-group">
                                    <label for="ekstrakurikuler">Ekstrakurikuler</label>
                                    <select name="ekstrakurikuler" id="ekstrakurikuler" class="form-control">
                                        <option hidden>Pilih</option>
                                        <option value="Olahraga" @if($murid->ekstrakurikuler == "Olahraga") selected @endif>Olahraga</option>
                                        <option value="Seni" @if($murid->ekstrakurikuler == "Seni") selected @endif>Seni</option>
                                        <option value="Musik" @if($murid->ekstrakurikuler == "Musik") selected @endif>Musik</option>
                                        <option value="Bahasa" @if($murid->ekstrakurikuler == "Bahasa") selected @endif>Bahasa</option>
                                        <option value="Sains" @if($murid->ekstrakurikuler == "Sains") selected @endif>Sains</option>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-dark">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
