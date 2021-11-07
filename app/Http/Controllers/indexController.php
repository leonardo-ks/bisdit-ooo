<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class indexController extends Controller
{
    //untuk function tembatbeli jangan lupa dimitra di left join

    public function detailvarianoleh($idoleh)
    {
        $varianoleh = DB::table('varianoleh')
        ->join('bahandasar', 'bahandasar.idbahan', '=', 'varianoleh.idbahan')
        ->join('lokasi', 'lokasi.idlokasi', '=', 'varianoleh.idlokasi')
        ->join('masak', 'masak.idmasak', '=', 'varianoleh.idmasak')
        ->leftjoin('mitra', 'mitra.idmitra', '=', 'varianoleh.idmitra')
        ->join('rasa', 'rasa.idrasa', '=', 'rasa.idrasa')
        ->join('tekstur', 'tekstur.idtekstur', '=', 'varianoleh.idtekstur')
        ->join('tipeoleh', 'tipeoleh.idtipe', '=', 'varianoleh.idtipe')
        ->where('idoleh',$idoleh)
        ->get();

        $tempatbeli = DB::table('tempatbeli')
        ->join('lokasi','lokasi.idlokasi','=','tempatbeli.idlokasi')
        ->join('varianoleh','varianoleh.idoleh','=','tempatbeli.idoleh')
        ->where('idoleh',$idoleh)
        ->get();

        return view('varianoleh', ['varianoleh','tempatbeli' => $varianoleh,$tempatbeli]);
    }

}
