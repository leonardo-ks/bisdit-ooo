<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MitraController extends Controller
{
    public function mitra(){
        $mitra = DB::table('mitra')
        ->join('lokasi', 'lokasi.idlokasi', '=', 'mitra.idlokasi')
        ->get();
        $idmitra = '';
        foreach ($mitra as $m) {
            $idmitra = $m->idmitra;
        }
        $produkmitra= DB::table('produk_mitra')
        ->where('produk_mitra.idmitra',$idmitra)
        ->join('mitra', 'mitra.idmitra', '=', 'produk_mitra.idmitra')
        ->get();
        return view('mitra', compact('mitra','produkmitra'));
    }

}
