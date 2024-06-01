<?php

namespace App\Http\Controllers;

use App\Models\guru;
use Illuminate\Http\Request;

class guruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $guru = guru::orderBy('id_guru','ASC')->get();
        return view ('guru.index', compact('guru'));
    }

    public function report()
    {
        $guru = guru::get();
        return view ('guru.report', compact('guru'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $guru = guru::all();
        return view('guru.create',compact('guru'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama'=> 'required|unique:gurus',
            'alamat'=> 'required',
            'tempat_lahir'=> 'required',
            'tgl_lahir'=> 'required',
            'agama'=> 'required',
            'pengajar'=> 'required',
        ],[
            'nama.unique' => 'Nama tidak boleh sama',
        ]);

        guru::create($validated);
        return redirect()->route('guru.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(guru $guru)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $guru = guru::find($id);
        return view('guru.edit', [
            'guru' => $guru
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $guru = guru::find($id);
        // $guru->update($request->all());

        // return redirect()->route('guru.index')
        // dd($request);
        $rules = [
            'nama'=> 'required',
            'alamat'=> 'required',
            'tempat_lahir'=> 'required',
            'tgl_lahir'=> 'required',
            'agama'=> 'required',
            'pengajar'=> 'required',
        ];
        if ($request->nama != $guru->nama) {
            $rules['nama'] = 'required|unique:gurus';
        };
        $validated = $request->validate($rules);
        // dd($validated);
        guru::where('id_guru', $id)->update($validated);
        return redirect('guru')->with('success', 'Data Berhasil Diubah!');

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
        $guru = guru::findOrFail($id);
        $guru->delete($request->all());

        return redirect()->route('guru.index');
    }
}
