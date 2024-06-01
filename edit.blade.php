@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-dark">Update Data Mata Pelajaran</h6>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <form action="{{ route('matapelajaran.update', $pelajaran->id_matapelajaran) }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="row mx-2 my-2">
                            <div class="table">
                                <label for="pelajaran">Mata Pelajaran</label>
                                <input type="text" name="pelajaran" id="pelajaran" class="form-control" placeholder=""
                                    aria-label="First" value="{{ old('pelajaran', $pelajaran->pelajaran) }}">
                            </div>
                            <br>
                            <div class="table">
                                <label for="pembelajaran">Jenis Pembelajaran</label>
                                <select name="pembelajaran" id="pembelajaran" class="form-control">
                                    <option value="--Pilih--">--Pilih--</option>
                                    <option value="Normatif" @if($pelajaran->pembelajaran == "Normatif") selected @endif>Normatif</option>
                                    <option value="Adaptif"@if($pelajaran->pembelajaran == "Adaptif") selected @endif>Adaptif</option>
                                </select>
                            </div>
                            <div class="table">
                                <label for="id_jurusan">Jurusan</label>
                                <select class="form-control" name="id_jurusan" id="id_jurusan">
                                    <option hidden>Pilih Jurusan</option>
                                    <option disabled="disabled" default="true">Pilih Jurusan</option>
                                    @foreach ($jurusan as $id => $item)
                                    <option value="{{ $item->id_jurusan }}"
                                        @if (old('id_jurusan') == $item->id_jurusan) selected @endif>{{ $item->jurusan }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <br>
                            <div class="table">
                                <label for="id_guru">Guru Pengajar</label>
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
                            <div class="table">
                                <label for="tahun">Tahun Akademik</label>
                                <select name="tahun" id="tahun" class="form-control" placeholder="" aria-label="First">
                                  <?php
                                  $currentYear = date('Y');
                                  for ($year = $currentYear - 10; $year <= $currentYear + 10; $year++) {
                                      echo "<option value='$year'>$year</option>";
                                  }
                                  ?>
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
