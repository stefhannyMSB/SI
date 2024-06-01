<?php

namespace App\Http\Controllers;

use App\Models\murid;
use App\Models\walimurid;
use Illuminate\Http\Request;

class walimuridController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $murid = murid ::all();
        $walimurid = walimurid::orderBy('id_walimurid','ASC')->get();
        return view ('walimurid.index', compact('walimurid','murid'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $murid = murid ::all();
        $walimurid = walimurid ::all();
        return view('walimurid.create', compact('walimurid','murid'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'nama'=>'required|unique:murids',
            'nama_ibu' => 'required',
            'pekerjaan_ibu' => 'required',
            'penghasilan_ibu' => 'required',
            'alamat_ibu' => 'required',
            'telp_ibu' => 'required',
            'nama_ayah' => 'required',
            'pekerjaan_ayah' => 'required',
            'penghasilan_ayah' => 'required',
            'alamat_ayah' => 'required',
            'telp_ayah' => 'required',
            'nama_wali' => 'required',
            'pekerjaan_wali' => 'required',
            'penghasilan_wali' => 'required',
            'alamat_wali' => 'required',
            'telp_wali' => 'required',

        ],[

            'nama.unique' => 'nama tidak boleh sama',
        ]);

        walimurid::create($validated);
        return redirect()->route('walimurid.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(walimurid $walimurid)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($walimurid)
    {
        //
        $murid = murid ::all();
        $walimurid = walimurid::find($walimurid);
        return view('walimurid.edit', [
            'walimurid' => $walimurid
        ],compact('murid'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $walimurid = walimurid::find($id);
        $rules = [
            'id_murid.required'=>'required',
            'nama_ibu.required' => 'required',
            'pekerjaan_ibu.required' => 'required',
            'penghasilan_ibu.required' => 'required',
            'alamat_ibu.required' => 'required',
            'telp_ibu.required' => 'required',
            'nama_ayah.required' => 'required',
            'pekerjaan_ayah.required' => 'required',
            'penghasilan_ayah.required' => 'required',
            'alamat_ayah.required' => 'required',
            'telp_ayah.required' => 'required',
            'nama_wali.required' => 'required',
            'pekerjaan_wali.required' => 'required',
            'penghasilan_wali.required' => 'required',
            'alamat_wali.required' => 'required',
            'telp_wali.required' => 'required',
        ];
        if ($request->nama != $walimurid->nama) {
            $rules['nama'] = 'required|unique:walimurids';
        };
        $validated = $request->validate($rules);
        // dd($validated);
        walimurid::where('id_walimurid', $id)->update($validated);
        return redirect('walimurid')->with('success', 'Data Berhasil Diubah!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(walimurid $walimurid)
    {
        //
    }
}
