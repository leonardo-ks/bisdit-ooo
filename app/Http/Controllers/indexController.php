<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Stevebauman\Location\Facades\Location;

class IndexController extends Controller
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
            ->orderBy('favorit_count', 'desc')
            ->limit(12)
            ->get();

        $olehKeluarga = DB::table('varianoleh')
            ->join('lokasi', 'lokasi.idlokasi', '=', 'varianoleh.idlokasi')
            ->where('namacocok', 'like', '%Keluarga%')
            ->orderBy('favorit_count', 'desc')
            ->limit(12)
            ->get();

        $olehPopuler = DB::table('varianoleh')
            ->join('lokasi', 'lokasi.idlokasi', '=', 'varianoleh.idlokasi')
            ->where('kota', '=', $address['city'])
            ->orderBy('favorit_count', 'desc')
            ->limit(12)
            ->get();

        return view('index', compact('address', 'olehKolega', 'olehKeluarga', 'olehPopuler'));
    }
}