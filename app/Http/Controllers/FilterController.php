<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

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


    public function compose(View $view)
    {
        $jenisoleh = DB::table('varianoleh')
            ->leftjoin('jenisoleh', 'jenisoleh.idjenis', '=', 'varianoleh.idjenis')
            ->select('jenisoleh.idjenis', 'namajenis', 'gambarjenis')
            ->distinct()
            ->orderBy('namajenis')
            ->get();

        $bahandasar = DB::table('varianoleh')
            ->leftjoin('bahandasar', 'bahandasar.idbahan', '=', 'varianoleh.idbahan')
            ->select('bahandasar.idbahan', 'namabahan', 'gambarbahan')
            ->distinct()
            ->orderBy('namabahan')
            ->get();

        $rasa = DB::table('varianoleh')
            ->leftjoin('rasa', 'rasa.idrasa', '=', 'varianoleh.idrasa')
            ->select('rasa.idrasa', 'namarasa', 'gambarasa')
            ->distinct()
            ->orderBy('namarasa')
            ->get();

        $tekstur = DB::table('varianoleh')
            ->leftjoin('tekstur', 'tekstur.idtekstur', '=', 'varianoleh.idtekstur')
            ->select('tekstur.idtekstur', 'namatekstur', 'gambartekstur')
            ->distinct()
            ->orderBy('namatekstur')
            ->get();

        $caramasak = DB::table('varianoleh')
            ->leftjoin('masak', 'masak.idmasak', '=', 'varianoleh.idmasak')
            ->select('masak.idmasak', 'namamasak', 'gambarmasak')
            ->distinct()
            ->orderBy('namamasak')
            ->get();

        $idjenis = '';
        foreach ($jenisoleh as $j) {
            $idjenis = $j->idjenis;
        }

        // $varianjenis = DB::table('varianoleh')
        //     ->leftjoin('varianjenis', 'varianjenis.id_varian', '=', 'varianoleh.id_varian')
        //     ->select('varianjenis.id_varian','varianjenis.idjenis', 'namavarian', 'gambarvarian')
        //     ->distinct()
        //     ->where('varianjenis.idjenis', '=', $idjenis)
        //     ->orderBy('namavarian')
        //     ->get();

        $view->with(compact('jenisoleh', 'bahandasar', 'rasa', 'tekstur', 'caramasak'));
    }

}
