<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FilterController extends Controller
{
    public function daerahasal()
    {
        $daerahasal = DB::table('varianoleh')
            ->join('lokasi', 'lokasi.idlokasi', '=', 'varianoleh.idlokasi')
            ->select('lokasi.idlokasi', 'kota', 'provinsi', 'gambarlokasi')
            ->distinct()
            ->orderBy('kota')
            ->paginate(8);
        return view('daerahasal', ['daerahasal' => $daerahasal]);
    }

    public function olehbydaerah($kota)
    {
        $olehbydaerah = DB::table('varianoleh')
            ->join('lokasi', 'lokasi.idlokasi', '=', 'varianoleh.idlokasi')
            ->leftjoin('varianjenis', 'varianjenis.id_varian', '=', 'varianoleh.id_varian')
            ->where('kota', $kota)
            ->orderBy('namaoleh')
            ->paginate(8);
        return view('filterbydaerah', compact('olehbydaerah', 'kota'));
    }
}