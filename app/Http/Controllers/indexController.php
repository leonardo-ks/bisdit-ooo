<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Stevebauman\Location\Facades\Location;

class indexController extends Controller
{
    //untuk function tembatbeli jangan lupa dimitra di left join
    public function index(Request $request)
    {
        $ip = request()->ip();
        $ip = request()->header('X-Forwarded-For');
        $location = Location::get($ip);
        $key = 'pk.025798fb95072c0fb2b76c1ad03e9da6';
        $lat = $location->latitude;
        $lon = $location->longitude;
        $api_query = 'https://us1.locationiq.com/v1/reverse.php?key=' . $key . '&lat=' . $lat . '&lon=' . $lon . '&accept-language=id&format=json';
        $response = @file_get_contents($api_query);
        $decoded = json_decode($response, true);
        $address = $decoded['address'];

        $olehKolega = DB::table('varianoleh')
            ->join('lokasi', 'lokasi.idlokasi', '=', 'varianoleh.idlokasi')
            ->where('namacocok', 'like', '%Kolega%')
            ->get();

        $olehKeluarga = DB::table('varianoleh')
            ->join('lokasi', 'lokasi.idlokasi', '=', 'varianoleh.idlokasi')
            ->where('namacocok', 'like', '%Keluarga%')
            ->get();

        $olehPopuler = DB::table('varianoleh')
            ->join('lokasi', 'lokasi.idlokasi', '=', 'varianoleh.idlokasi')
            ->where('kota', '=', $address['city'])
            ->get();

        return view('index', compact('address', 'olehKolega', 'olehKeluarga', 'olehPopuler'));
    }

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
            ->where('idoleh', $idoleh)
            ->get();

        $tempatbeli = DB::table('tempatbeli')
            ->join('lokasi', 'lokasi.idlokasi', '=', 'tempatbeli.idlokasi')
            ->join('varianoleh', 'varianoleh.idoleh', '=', 'tempatbeli.idoleh')
            ->where('tempatbeli.idoleh', $idoleh)
            ->get();
        return view('varianoleh', compact('varianoleh', 'tempatbeli'));
    }
}