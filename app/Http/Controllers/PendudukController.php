<?php

namespace App\Http\Controllers;

use App\Models\Penduduk;
use App\Models\KartuKeluarga;
use App\Models\Kewarganegaraan;
use App\Models\LevelPendidikan;
use App\Models\Pekerjaan;
use Illuminate\Http\Request;

class PendudukController extends Controller
{
    public function index()
    {
        $penduduks = Penduduk::all();
        return view('Penduduk.index', compact('penduduks'));
    }

    public function create()
    {
        $kartukeluargas = KartuKeluarga::all()->pluck('no', 'id');
        $kewarganegaraans = Kewarganegaraan::all()->pluck('nama', 'id');
        $pekerjaans = Pekerjaan::all()->pluck('nama', 'id');
        $levelpendidikans = LevelPendidikan::all()->pluck('nama', 'id');
        return view('Penduduk.create', compact('kartukeluargas','kewarganegaraans','pekerjaans','levelpendidikans'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Penduduk::create($request->all());
        return redirect()->route('Penduduk.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $penduduks = Penduduk::find($id);
        return view('Penduduk.show', compact('penduduks'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $penduduks = Penduduk::find($id);
        return view('Penduduk.edit', compact('penduduks'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $penduduks = Penduduk::whereId($id)->update($request->only(
        'nama',
        'nik',
        'tempat_lahir',
        'tanggal_lahir',
        'agama',
        'jenis_kelamin',
        'status_pernikahan',
        'status_keluarga',
        'ayah',
        'ibu'));
        return redirect()->route('Penduduk.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $penduduks = Penduduk::findOrFail($id);
        $penduduks->delete();

        return redirect()->route('Penduduk.index');
    }
}
