@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-dark">Update Data kelas</h6>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <form action="{{ route('kelas.update', $kelas->id_kelas) }}" method="POST">
                        @method('PUT')
                        @csrf
                            <div class="table">
                                <label for="kelas">Kelas</label>
                                <select name="kelas" id="kelas" class="form-control">
                                    <option value="Pilih">Pilih</option>
                                    <option value="X" @if($kelas->kelas == "X") selected @endif>X</option>
                                    <option value="XI"@if($kelas->kelas == "XI") selected @endif>XI</option>
                                    <option value="XII"@if($kelas->kelas == "X") selected @endif>XII</option>
                                </select>
                            </div>
                            <div class="table">
                                <label for="id_jurusan">Jurusan</label>
                                <select class="form-control" name="id_jurusan" id="id_jurusan">
                                    <option hidden>Pilih Jurusan</option>
                                    <option disabled="disabled" default="true">Pilih Jurusan</option>
                                    @foreach ($jurusan as $id => $item)
                                        <option value="{{ $item->id_jurusan }}"
                                            {{ $item->name == $id ? 'selected' : '' }}>{{ $item->jurusan }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <br>
                            <div class="table">
                                <label for="id_guru">Walikelas</label>
                                <select class="form-control" name="id_guru" id="id_guru">
                                    <option hidden>Pilih Guru Pengajar</option>
                                    <option disabled="disabled" default="true">Pilih Guru</option>
                                    @foreach ($guru as $id => $item)
                                        <option value="{{ $item->id_guru }}"
                                            {{ $item->name == $id ? 'selected' : '' }}>{{ $item->nama }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                            <button type="submit" class="btn btn-dark">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
