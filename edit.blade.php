@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-dark">Update Data Jadwal Pelajaran</h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <form action="{{ route('jadwal.update', $jadwal->id_jadwal) }}" method="POST">
                            @method('PUT')
                            @csrf
                            <div class="row mx-2 my-2">
                                <div class="table">
                                    <label for="hari">Hari</label>
                                    <select name="hari" id="hari" class="form-control">
                                        <option hidden>Pilih Hari</option>
                                        <option value="Senin" @if ($jadwal->hari == 'Senin') selected @endif>Senin
                                        </option>
                                        <option value="Selasa" @if ($jadwal->hari == 'Selasa') selected @endif>Selasa
                                        </option>
                                        <option value="Rabu" @if ($jadwal->hari == 'Rabu') selected @endif>Rabu
                                        </option>
                                        <option value="Kamis" @if ($jadwal->hari == 'Kamis') selected @endif>Kamis
                                        </option>
                                        <option value="Jumat" @if ($jadwal->hari == 'Jumat') selected @endif>Jumat
                                        </option>
                                    </select>
                                </div>
                                <br>
                                <div class="table">
                                    <label for="waktu">Waktu</label>
                                    <input type="time" name="waktu" id="waktu" class="form-control" placeholder=""
                                        aria-label="First" {{ old('waktu', $jadwal->waktu) }}>
                                </div>
                                <div class="table">
                                    <label for="id_jurusan">Jurusan</label>
                                    <select class="form-control" name="id_jurusan" id="id_jurusan">
                                        <option hidden>Pilih Jurusan</option>
                                        <option disabled="disabled" default="true">Pilih Jurusan</option>
                                        @foreach ($jurusan as $id => $item)
                                            <option value="{{ $item->id_jurusan }}"
                                                {{ $item->jurusen == $id ? 'selected' : '' }}>{{ $item->jurusan }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <br>
                                <div class="table">
                                    <label for="id_kelas">Kelas</label>
                                    <select class="form-control" name="id_kelas" id="id_kelas">
                                        <option hidden>Pilih Kelas</option>
                                        <option disabled="disabled" default="true">Pilih Kelas</option>
                                        @foreach ($kelas as $id => $item)
                                            <option value="{{ $item->id_kelas }}"
                                                {{ $item->keles == $id ? 'selected' : '' }}>{{ $item->kelas }}
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
                                        @foreach ($matapelajaran as $id => $item)
                                            <option value="{{ $item->id_matapelajaran }}"
                                                {{ $item->palajaran == $id ? 'selected' : '' }}>{{ $item->pelajaran }}
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
