@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-dark">Tambah Data Jadwal Pelajaran</h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <form action="{{ route('jadwal.store') }}" method="POST">
                            @csrf
                            <div class="row mx-2 my-2">
                                <div class="table">
                                    <label for="hari">Hari</label>
                                    <select name="hari" id="hari" class="form-control">
                                        <option hidden>Pilih Hari</option>
                                        <option value="Senin">Senin</option>
                                        <option value="Selasa">Selasa</option>
                                        <option value="Rabu">Rabu</option>
                                        <option value="Kamis">Kamis</option>
                                        <option value="Jumat">Jumat</option>
                                    </select>
                                </div>
                                <br>
                                <div class="table">
                                    <label for="waktu">Waktu</label>
                                    <input type="time" name="waktu" id='waktu' class="form-control" placeholder=""
                                        aria-label="First">
                                </div>
                                <div class="table">
                                    <label for="id_jurusan">Jurusan</label>
                                    <select class="form-control" name="id_jurusan" id="id_jurusan">
                                        <option hidden>Pilih Jurusan</option>
                                        <option disabled="disabled" default="true">Pilih Jurusan</option>
                                        @foreach ($jurusan as $item)
                                            <option value="{{ $item->id_jurusan }}"
                                                @if (old('id_jurusan') == $item->id_kelas) selected @endif>{{ $item->jurusan }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="table">
                                    <label for="id_kelas">Kelas</label>
                                    <select class="form-control" name="id_kelas" id="id_kelas">
                                        <option hidden>Pilih Kelas</option>
                                        <option disabled="disabled" default="true">Pilih Kelas</option>
                                        @foreach ($kelas as $item)
                                            <option value="{{ $item->id_jurusan }}"
                                                @if (old('id_kelas') == $item->id_kelas) selected @endif>{{ $item->kelas }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <br>
                                <div class="table">
                                    <label for="id_matapelajaran">Mata Pelajaran</label>
                                    <select class="form-control" name="id_matapelajaran" id="id_matapelajaran">
                                        <option hidden>Pilih Mata Pelajaran</option>
                                        <option disabled="disabled" default="true">Pilih Mata Pelajaran</option>
                                        @foreach ($matapelajaran as $item)
                                            <option value="{{ $item->id_matapelajaran }}"
                                                @if (old('id_matapelajaran') == $item->id_matapelajaran) selected @endif>{{ $item->pelajaran }}
                                            </option>
                                        @endforeach
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
