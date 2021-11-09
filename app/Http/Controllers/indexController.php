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
        $api_query = 'https://us1.locationiq.com/v1/reverse.php?key=' . $key . '&lat=' . $lat . '&lon=' . $lon . '&accept-language=ID&format=json';
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
            ->leftjoin('bahandasar', 'bahandasar.idbahan', '=', 'varianoleh.idbahan')
            ->leftjoin('lokasi', 'lokasi.idlokasi', '=', 'varianoleh.idlokasi')
            ->leftjoin('masak', 'masak.idmasak', '=', 'varianoleh.idmasak')
            ->leftjoin('mitra', 'mitra.idmitra', '=', 'varianoleh.idmitra')
            ->leftjoin('rasa', 'rasa.idrasa', '=', 'varianoleh.idrasa')
            ->leftjoin('tekstur', 'tekstur.idtekstur', '=', 'varianoleh.idtekstur')
            ->leftjoin('tipeoleh', 'tipeoleh.idtipe', '=', 'varianoleh.idtipe')
            ->where('idoleh', $idoleh)
            ->get();

        $tempatbeli = DB::table('tempatbeli')
            ->leftjoin('lokasi', 'lokasi.idlokasi', '=', 'tempatbeli.idlokasi')
            ->leftjoin('varianoleh', 'varianoleh.idoleh', '=', 'tempatbeli.idoleh')
            ->where('tempatbeli.idoleh', $idoleh)
            ->get();

        $provinsi='';
        foreach($varianoleh as $v){
            $provinsi= $v->provinsi;
        }
        $rekomlokasi= DB::table('varianoleh')
        ->leftjoin('lokasi', 'lokasi.idlokasi', '=', 'varianoleh.idlokasi')
        ->select('gambarutama','namaoleh','kota','provinsi')
        ->where('provinsi',$provinsi)
        ->get();

        return view('varianoleh', compact('varianoleh', 'tempatbeli','rekomlokasi'));
    }
}
