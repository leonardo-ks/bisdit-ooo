<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class FilterController extends Controller
{
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

        $daerahasal = DB::table('varianoleh')
            ->leftJoin('lokasi', 'lokasi.idlokasi', '=', 'varianoleh.idlokasi')
            ->select('lokasi.idlokasi', 'kota', 'provinsi', 'gambarlokasi')
            ->distinct()
            ->orderBy('kota')
            ->get();

        $view->with(compact('jenisoleh', 'bahandasar', 'rasa', 'tekstur', 'caramasak', 'daerahasal'));
    }

    public function varianjenis($jenis)
    {
        $jenisoleh = DB::table('jenisoleh')
            ->where('namajenis', $jenis)
            ->get();

        $idjenis = '';
        foreach ($jenisoleh as $j) {
            $idjenis = $j->idjenis;
        }

        $varianjenis = DB::table('varianjenis')
            ->where('idjenis', $idjenis)
            ->paginate(8);

        return view('varianjenis', compact('jenisoleh', 'varianjenis'));
    }

    public function filterby($kategori, $by)
    {
        $olehbydaerah = DB::table('varianoleh')
            ->join('lokasi', 'lokasi.idlokasi', '=', 'varianoleh.idlokasi')
            ->leftjoin('varianjenis', 'varianjenis.id_varian', '=', 'varianoleh.id_varian')
            ->where('kota', $by)
            ->orderBy('namaoleh')
            ->paginate(8);

        $olehbybahan = DB::table('varianoleh')
            ->join('bahandasar', 'bahandasar.idbahan', '=', 'varianoleh.idbahan')
            ->leftjoin('lokasi', 'lokasi.idlokasi', '=', 'varianoleh.idlokasi')
            ->where('namabahan', $by)
            ->orderBy('namabahan')
            ->paginate(8);

        $olehbyrasa = DB::table('varianoleh')
            ->join('rasa', 'rasa.idrasa', '=', 'varianoleh.idrasa')
            ->leftjoin('lokasi', 'lokasi.idlokasi', '=', 'varianoleh.idlokasi')
            ->where('namarasa', $by)
            ->orderBy('namarasa')
            ->paginate(8);

        $olehbytekstur = DB::table('varianoleh')
            ->join('tekstur', 'tekstur.idtekstur', '=', 'varianoleh.idtekstur')
            ->leftjoin('lokasi', 'lokasi.idlokasi', '=', 'varianoleh.idlokasi')
            ->where('namatekstur', $by)
            ->orderBy('namatekstur')
            ->paginate(8);

        $olehbymasak = DB::table('varianoleh')
            ->join('masak', 'masak.idmasak', '=', 'varianoleh.idmasak')
            ->leftjoin('lokasi', 'lokasi.idlokasi', '=', 'varianoleh.idlokasi')
            ->where('namamasak', $by)
            ->orderBy('namamasak')
            ->paginate(8);

        $olehbyvarian = DB::table('varianoleh')
            ->join('varianjenis', 'varianjenis.id_varian', '=', 'varianoleh.id_varian')
            ->leftjoin('lokasi', 'lokasi.idlokasi', '=', 'varianoleh.idlokasi')
            ->where('namavarian', $by)
            ->orderBy('namavarian')
            ->paginate(8);

        return view('filter', compact('olehbydaerah', 'olehbybahan', 'olehbyrasa', 'olehbytekstur', 'olehbymasak', 'olehbyvarian', 'kategori', 'by'));
    }
}
