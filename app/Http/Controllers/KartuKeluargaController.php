<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KartuKeluarga;
use App\Models\Penduduk;
use App\Models\Jorong;

class KartuKeluargaController extends Controller
{
    public function index()
    {
        $kartukeluargas = KartuKeluarga::all();
        return view('Kartu_keluarga.index', compact('kartukeluargas'));
    }

    public function create()
    {
        $kartukeluargas = KartuKeluarga::all()->pluck('no', 'id');
        $jorongs = Jorong::all()->pluck('nama','id');
        return view('Kartu_keluarga.create', compact('kartukeluargas','jorongs'));
    }

    public function store(Request $request)
    {
        KartuKeluarga::create($request->all());
        return redirect()->route('KartuKeluarga.index');
    }

    public function edit($id)
    {
        $kartukeluargas = KartuKeluarga::find($id);
        $jorongs = Jorong::all()->pluck('nama','id');
        return view('Kartu_keluarga.edit', compact('kartukeluargas','jorongs'));
    }

    public function update(Request $request,$id)
    {
        $kartukeluargas = KartuKeluarga::whereId($id)->update($request->only(
            'jorong_id','no','tanggal_pencatatan'
        ));
        return redirect()->route('KartuKeluarga.index');
    }

    public function show($id)
    {
        $kartukeluargas = KartuKeluarga::find($id);
        $penduduks = Penduduk::where('keluarga_id', $id)->get();
        return view('Kartu_keluarga.show', compact('kartukeluargas','penduduks'));
    }

    public function destroy($id)
    {
        $penduduks = Penduduk::findOrFail($id);
        $penduduks->delete();

        return redirect()->route('KartuKeluarga.index');
    }
}
