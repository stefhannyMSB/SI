<?php

namespace App\Http\Controllers;

use App\Models\guru;
use App\Models\jurusan;
use App\Models\matapelajaran;
use Illuminate\Http\Request;

class matapelajaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // $matapelajaran = matapelajaran::orderBy('id_matapelajaran','ASC')->get();
        // return view ('pelajaran.index', compact('matapelajaran'));
        // return view('pelajaran.index', [
        //     'matapelajarans' => matapelajaran::with('jurusan')->get(),
        // ]);
        $jurusan = jurusan ::all();
        $guru = guru ::all();
        $matapelajaran = matapelajaran::orderBy('id_matapelajaran','ASC')->get();
        return view ('matapelajaran.index', compact('matapelajaran','jurusan','guru'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $jurusan = jurusan ::all();
        $guru = guru ::all();
        return view('matapelajaran.create', compact('jurusan','guru'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'pelajaran' => 'required',
            'pembelajaran'=>'required',
            'id_jurusan' => 'required',
            'id_guru' => 'required',
            'tahun' => 'required'
        ],[
            'pelajaran.required' => 'required',
            'pembelajaran.required'=>'required',
            'id_jurusan.required' => 'required',
            'id_guru.required' => 'required',
            'tahun.required' => 'required',
        ]);

        matapelajaran::create($validated);
        return redirect()->route('matapelajaran.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(matapelajaran $matapelajaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $jurusan = jurusan ::all();
        $guru = guru ::all();
        $matapelajaran = matapelajaran::find($id);
        return view('matapelajaran.edit', [
            'pelajaran' => $matapelajaran
        ],compact('jurusan','guru'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $pelajaran = matapelajaran::find($id);
        $rules = [
            'matapelajaran' => 'required',
            'pembelajaran'=>'required',
            'id_jurusan' => 'required',
            'id_guru' => 'required',
            'tahun' => 'required',
        ];
        if ($request->pelajaran != $pelajaran->pelajaran) {
            $rules['pelajaran'] = 'required';
        };
        $validated = $request->validate($rules);
        matapelajaran::find($pelajaran->id_matapelajaran)->update($validated);
        return redirect('pelajaran')->with('success', 'Data Berhasil Diubah!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        matapelajaran::destroy($id);
        return redirect('matapelajaran')->with('success', 'Data Mata Pelajaran Berhasil Dihapus!');
    }
}
