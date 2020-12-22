<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penduduk;
use App\Models\KartuKeluarga;
use App\Models\Nagari;

class LaporanController extends Controller
{
    public function nagari()
    {
        $nagaris = Nagari::all()->pluck('nama', 'id');
        return view('Laporan.nagari', compact('nagaris'));
    }

    public function nagari_show(Request $request)
    {
        $nagaris = Nagari::find($request);
        $jorongs = Jorong::where('nagari_id', $nagaris)->get();
        $kartukeluargas = KartuKeluarga::where('jorong_id', $jorongs)->get();
        $penduduks = Penduduk::where('keluarga_id', $kartukeluargas)->get();
        return view('Laporan.search_nagari', compact('nagaris','penduduks'));
    }

    public function umur()
    {
        return view('Laporan.umur');
    }

    public function pendidikan()
    {
        return view('Laporan.pendidikan');
    }
}
