<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $param = trim($request->get('param'));

        $result = DB::table('varianoleh')
            ->leftjoin('bahandasar', 'bahandasar.idbahan', '=', 'varianoleh.idbahan')
            ->leftjoin('lokasi', 'lokasi.idlokasi', '=', 'varianoleh.idlokasi')
            ->leftjoin('masak', 'masak.idmasak', '=', 'varianoleh.idmasak')
            ->leftjoin('rasa', 'rasa.idrasa', '=', 'varianoleh.idrasa')
            ->leftjoin('tekstur', 'tekstur.idtekstur', '=', 'varianoleh.idtekstur')
            ->leftjoin('varianjenis', 'varianjenis.id_varian', '=', 'varianoleh.id_varian')
            ->where('namaoleh', 'like', '%' . $param . '%')
            ->orWhere('namabahan', 'like', '%' . $param . '%')
            ->orWhere('kota', 'like', '%' . $param . '%')
            ->orWhere('namamasak', 'like', '%' . $param . '%')
            ->orWhere('namarasa', 'like', '%' . $param . '%')
            ->orWhere('namatekstur', 'like', '%' . $param . '%')
            ->orWhere('namavarian', 'like', '%' . $param . '%')
            ->distinct()
            ->paginate(8);

        return view('search', compact('result', 'param'));
    }
}