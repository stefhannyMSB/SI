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
                    <form action="{{ route('walimurid.update', $walimurid->id_walimurid) }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="row mx-2 my-2">
                            <div class="table">
                                <label for="id_murid">Nama Murid</label>
                                <select class="form-control" name="id_murid" id="id_murid">
                                    <option hidden>pilih</option>
                                    @foreach ($murid as $item)
                                        <option value="{{ $item->id_murid }}"
                                            @if (old('id_murid') == $item->id_murid) selected @endif>{{ $item->nama }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <br>
                            <div class="table">
                                <label for="nama_ibu">Nama Ibu</label>
                                <input type="text" name="nama_ibu" id="nama_ibu"class="form-control" placeholder=""
                                    aria-label="First">
                            </div>
                            <br>
                            <div class="table">
                                <label for="pekerjaan_ibu">Pekerjaan Ibu</label>
                                <input type="text" name="pekerjaan_ibu" id="pekerjaan_ibu" class="form-control" placeholder=""
                                    aria-label="First">
                            </div>
                            <br>
                            <div class="table">
                                <label for="penghasilan_ibu">Penghasilan Ibu</label>
                                <input type="text" name="penghasilan_ibu" id="penghasilan_ibu" class="form-control" placeholder=""
                                    aria-label="First">
                            </div>
                            <br>
                            <div class="table">
                                <label for="alamat_ibu">Alamat Ibu</label>
                                <input type="text" name="alamat_ibu" id="alamat_ibu" class="form-control" placeholder=""
                                    aria-label="First">
                            </div>
                            <br>
                            <div class="table">
                                <label for="telp_ibu">Telp Ibu</label>
                                <input type="text" name="telp_ibu" id="telp_ibu" class="form-control" placeholder=""
                                    aria-label="First">
                            </div>
                            <br>
                            <div class="table">
                                <label for="nama_ayah">Nama Ayah</label>
                                <input type="text" name="nama_ayah" id="nama_ayah" class="form-control" placeholder=""
                                    aria-label="First">
                            </div>
                            <br>
                            <div class="table">
                                <label for="pekerjaan_ayah">Pekerjaan Ayah</label>
                                <input type="text" name="pekerjaan_ayah" id="pekerjaan_ayah"class="form-control" placeholder=""
                                    aria-label="First">
                            </div>
                            <br>
                            <div class="table">
                                <label for="penghasilan_ayah">Penghasilan Ayah</label>
                                <input type="text" name="penghasilan_ayah" id="penghasilan_ayah" class="form-control" placeholder=""
                                    aria-label="First">
                            </div>
                            <br>
                            <div class="table">
                                <label for="alamat_ayah">Alamat Ayah</label>
                                <input type="text" name="alamat_ayah" id="alamat_ayah" class="form-control" placeholder=""
                                    aria-label="First">
                            </div>
                            <br>
                            <div class="table">
                                <label for="telp_ayah">Telp Ayah</label>
                                <input type="text" name="telp_ayah" id="telp_ayah" class="form-control" placeholder=""
                                    aria-label="First">
                            </div>
                            <br>
                            <div class="table">
                                <label for="nama_wali">Nama Wali</label>
                                <input type="text" name="nama_wali" id="nama_wali" class="form-control" placeholder=""
                                    aria-label="First">
                            </div>
                            <br>
                            <div class="table">
                                <label for="pekerjaan_wali">pekerjaan Wali</label>
                                <input type="text" name="pekerjaan_wali" id="pekerjaan_wali" class="form-control" placeholder=""
                                    aria-label="First">
                            </div>
                            <br>
                            <div class="table">
                                <label for="penghasilan_Wali">Penghasilan Wali</label>
                                <input type="text" name="penghasilan_Wali" id="penghasilan_wali" class="form-control" placeholder=""
                                    aria-label="First">
                            </div>
                            <br>
                            <div class="table">
                                <label for="alamat_wali">Wali Wali</label>
                                <input type="text" name="alamat_wali" id="alamat_wali" class="form-control" placeholder=""
                                    aria-label="First">
                            </div>
                            <br>
                            <div class="table">
                                <label for="telp_wali">Telp Wali</label>
                                <input type="text" name="telp_wali" id="alamat_wali" class="form-control" placeholder=""
                                    aria-label="First">
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
