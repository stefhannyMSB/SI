<?php

namespace App\Http\Controllers;

use App\Models\jadwal;
use App\Models\jurusan;
use App\Models\kelas;
use App\Models\matapelajaran;
use Illuminate\Http\Request;

class jadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $jurusan = jurusan::all();
        $kelas = kelas::all();
        $matapelajaran = matapelajaran::all();
        $jadwal = jadwal::orderBy('id_jadwal','ASC')->get();
        return view ('jadwal.index', compact('jadwal','jurusan','kelas','matapelajaran'));
    }

    public function report()
    {
        //
        $jurusan = jurusan::all();
        $kelas = kelas::all();
        $matapelajaran = matapelajaran::all();
        $jadwal = jadwal::with('jurusan','kelas','matapelajaran')->get();
        return view ('jadwal.report', compact('jadwal','jurusan','kelas','matapelajaran'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $jurusan = jurusan::all();
        $kelas = kelas::all();
        $matapelajaran = matapelajaran::all();
        return view('jadwal.create',compact('kelas','jurusan','matapelajaran'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
         $validated = $request->validate([
            'hari'=> 'required',
            'waktu'=> 'required',
            'id_jurusan'=> 'required',
            'id_kelas'=> 'required',
            'id_matapelajaran'=> 'required',
        ],[
            'hari.required' => 'required',
            'waktu.required'=> 'required',
            'id_jurusan.required'=> 'required',
            'id_kelas.required'=> 'required',
            'id_matapelajaran.required'=> 'required',
        ]);

        jadwal::create($validated);
        return redirect()->route('jadwal.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(jadwal $jadwal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $matapelajaran = matapelajaran::all();
        $jurusan = jurusan::all();
        $kelas = kelas::all();
        $jadwal = jadwal::find($id);
        return view('jadwal.edit', [
            'jadwal' => $jadwal
        ], compact('jurusan','kelas','matapelajaran'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $jadwal = jadwal::find($id);
        $rules =
        [
            'hari'=> 'required',
            'waktu'=> 'required',
            'id_jurusan'=>'required',
            'id_kelas'=> 'required',
            'id_matapelajaran'=> 'required',
        ];
        if ($request->hari != $jadwal->hari) {
            $rules['hari'] = 'required';
        };

        $validated = $request->validate($rules);
        // dd($validated);
        jadwal::where('id_jadwal', $id)->update($validated);
        return redirect('jadwal')->with('success', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(jadwal $jadwal)
    {
        //

    }
}
