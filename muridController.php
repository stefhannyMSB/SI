<?php

namespace App\Http\Controllers;

use App\Models\jurusan;
use App\Models\murid;
use Illuminate\Http\Request;

class muridController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view('murid.index', [
        //     'murids' => murid::with('jurusan')->get(),
        // ]);
        $murid = murid::orderBy('id_murid', 'ASC')->get();
        return view('murid.index', compact('murid'));
    }
    public function report()
    {
        $murid = murid::get();
        return view('murid.report', compact('murid'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jurusan = jurusan::all();
        return view('murid.create', compact('jurusan'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $validated = $request->validate([
            'NIS' => 'required|unique:murids',
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'id_jurusan' => 'required',
            'ekstrakurikuler' => 'required'
        ], [
                'NIS.unique' => 'NIS tidak boleh sama',
                'nama' => 'required',
                'tempat_lahir' => 'required',
                'tgl_lahir' => 'required',
                'jenis_kelamin' => 'required',
                'agama' => 'required',
                'id_jurusan' => 'required',
                'ekstrakurikuler' => 'required'
            ]);
        murid::create($validated);
        return redirect()->route('murid.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(murid $murid)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $jurusan = jurusan::all();
        $murid = murid::find($id);
        return view('murid.edit', [
            'murid' => $murid
        ], compact('jurusan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        // dd($request);
        $murid = murid::find($id);
        $rules = [
            'NIS' => 'required',
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'id_jurusan' => 'required',
            'ekstrakurikuler' => 'required'
        ];
        if ($request->NIS != $murid->NIS) {
            $rules['NIS'] = 'required|unique=murids';
        }
        ;

        $validated = $request->validate($rules);
        murid::find($murid->id_murid)->update($validated);
        return redirect('murid')->with('success', 'Data Berhasil Diubah');
        // dd($validated);
        // murid::find('id_murid', $id)->update($validated);
        // return redirect('murid')->with('success', 'Data Berhasil Diubah!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        // $murid = murid::findOrFail($id_murid);
        // $murid->delete();
        // return redirect()->route('murid.index');

        murid::destroy($id);
        return redirect('murid')->with('success', 'Data Berhasil Dihapus!');
    }

}
