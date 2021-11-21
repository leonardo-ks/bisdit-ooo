<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OlehController extends Controller
{
    public function detailvarianoleh($idoleh)
    {
        $varianoleh = DB::table('varianoleh')
            ->leftjoin('bahandasar', 'bahandasar.idbahan', '=', 'varianoleh.idbahan')
            ->leftjoin('lokasi', 'lokasi.idlokasi', '=', 'varianoleh.idlokasi')
            ->leftjoin('masak', 'masak.idmasak', '=', 'varianoleh.idmasak')
            ->leftjoin('mitra', 'mitra.idmitra', '=', 'varianoleh.idmitra')
            ->leftjoin('rasa', 'rasa.idrasa', '=', 'varianoleh.idrasa')
            ->leftjoin('tekstur', 'tekstur.idtekstur', '=', 'varianoleh.idtekstur')
            ->leftjoin('varianjenis', 'varianjenis.id_varian', '=', 'varianoleh.id_varian')
            ->where('idoleh', $idoleh)
            ->get();

        $tempatbeli = DB::table('tempatbeli')
            ->leftjoin('lokasi', 'lokasi.idlokasi', '=', 'tempatbeli.idlokasi')
            ->leftjoin('varianoleh', 'varianoleh.idoleh', '=', 'tempatbeli.idoleh')
            ->where('tempatbeli.idoleh', $idoleh)
            ->get();

        $provinsi = '';
        foreach ($varianoleh as $v) {
            $provinsi = $v->provinsi;
        }
        $rekomlokasi = DB::table('varianoleh')
            ->leftjoin('lokasi', 'lokasi.idlokasi', '=', 'varianoleh.idlokasi')
            ->where([
                ['provinsi', '=', $provinsi],
                ['idoleh', '!=', $idoleh],
            ])
            ->limit(9)
            ->get();

        $namavarian = '';
        foreach ($varianoleh as $v) {
            $namavarian = $v->namavarian;
        }

        $rekomvarianjenis = DB::table('varianoleh')
            ->leftjoin('lokasi', 'lokasi.idlokasi', '=', 'varianoleh.idlokasi')
            ->leftjoin('varianjenis', 'varianjenis.id_varian', '=', 'varianoleh.id_varian')
            ->where([
                ['namavarian', '=', $namavarian],
                ['idoleh', '!=', $idoleh],
            ])
            ->limit(9)
            ->get();

        return view('varianoleh', compact('varianoleh', 'tempatbeli', 'rekomlokasi', 'rekomvarianjenis', 'idoleh'));
    }
}