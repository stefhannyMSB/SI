<?php

namespace App\Http\Controllers;

use App\Models\guru;
use App\Models\jurusan;
use App\Models\kelas;
use Illuminate\Http\Request;

class kelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jurusan = jurusan::all();
        $guru = guru::all();
        $kelas = kelas::orderBy('id_kelas', 'ASC')->get();
        return view('kelas.index', compact('kelas', 'guru', 'jurusan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jurusan = jurusan::all();
        $guru = guru::all();
        $kelas = kelas::all();
        return view('kelas.create', compact('kelas', 'guru', 'jurusan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'kelas' => 'required',
            'id_jurusan' => 'required',
            'id_guru' => 'required',
        ], [
                'kelas.required' => 'required',
                'id_jurusan.required' => 'required',
                'id_guru.required' => 'required',
            ]);

        kelas::create($validated);
        return redirect()->route('kelas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(kelas $kelas)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $jurusan = jurusan::all();
        $guru = guru::all();
        $kelas = kelas::find($id);
        return view('kelas.edit', [
            'kelas' => $kelas
        ], compact('jurusan', 'guru'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $kelas = kelas::find($id);
        $rules = [
            'kelas' => 'required',
            'id_jurusan' => 'required',
            'id_guru' => 'required',
        ];
        if ($request->kelas != $kelas->kelas) {
            $rules['kelas'] = 'required|unique:kelas';
        }
        ;
        $validated = $request->validate($rules);
        kelas::find($kelas->id_kelas)->update($validated);
        return redirect('kelas')->with('success', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        kelas::destroy($id);
        return redirect()->route('kelas')->with('success','Data Berhasil Dihapus');
    }
}
