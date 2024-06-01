@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-dark">Tambah Data Kelas</h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <form action="{{ route('kelas.store') }}" method="POST">
                            @csrf
                            <div class="row mx-2 my-2">
                                <div class="table">
                                    <label for="kelas">Kelas</label>
                                    <select name="kelas" id="kelas" class="form-control">
                                        <option value="Pilih">Pilih</option>
                                        <option value="X">X</option>
                                        <option value="XI">XI</option>
                                        <option value="XII">XII</option>

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
                                <br>
                                <div class="table">
                                    <label for="id_guru">Walikelas </label>
                                    <select class="form-control" name="id_guru" id="id_guru">
                                        <option hidden>Pilih Guru</option>
                                        <option disabled="disabled" default="true">Pilih Guru</option>
                                        @foreach ($guru as $item)
                                            <option value="{{ $item->id_guru }}"
                                                @if (old('id_guru') == $item->id_guru) selected @endif>{{ $item->nama }}
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
