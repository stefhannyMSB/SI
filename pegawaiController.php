<?php

namespace App\Http\Controllers;

use App\Models\pegawai;
use Illuminate\Http\Request;

class pegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pegawai = pegawai::orderBy('id_pegawai','ASC')->get();
        return view ('pegawai.index', compact('pegawai'));
    }

    public function report()
    {
        $pegawai = pegawai::get();
        return view ('pegawai.report', compact('pegawai'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pegawai = pegawai::all();
        return view('pegawai.create',compact('pegawai'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd(request());
        $validated = $request->validate([
            'nama'=> 'required|unique:pegawais',
            'tempat_lahir'=> 'required',
            'tgl_lahir'=> 'required',
            'alamat'=> 'required',
            'no_telp'=> 'required',
            'agama'=> 'required',
            'jabatan'=> 'required',
        ],[
            'nama.unique' => 'Nama tidak boleh sama',
        ]);
        // dd($validated);
        pegawai::create($validated);
        return redirect()->route('pegawai.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(pegawai $pegawai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pegawai = pegawai::find($id);
        return view('pegawai.edit', [
            'pegawai' => $pegawai
        ],compact('pegawai'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $pegawai = pegawai::find($id);
        // $pegawai->update($request->all());

        // return redirect()->route('pegawai.index')
        // dd($request);
        $rules = [
            'nama'=> 'required',
            'tempat_lahir'=> 'required',
            'tgl_lahir'=> 'required',
            'alamat'=> 'required',
            'no_telp'=> 'required',
            'agama'=> 'required',
            'jabatan'=> 'required',
        ];
        // dd(request());
        if ($request->nama != $pegawai->nama) {
            $rules['nama'] = 'required|unique:pegawais';
        };
        $validated = $request->validate($rules);
        // dd($validated);
        pegawai::find($pegawai->id_pegawai)->update($validated);
        return redirect('pegawai')->with('success', 'Data Berhasil Diubah!');

        // $guru = guru::find($id);
        // $guru->nama = $request->input('nama');
        // $guru->save();

        // return redirect('/guru')->with('success','Data Guru Baru Ditanbahkan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        $pegawai = pegawai::findOrFail($id);
        $pegawai->delete($request->all());

        return redirect()->route('pegawai.index');
    }
}
