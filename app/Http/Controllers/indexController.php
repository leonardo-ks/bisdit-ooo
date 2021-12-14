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
        $location = Location::get("'" . $ip . "'");
        $key = 'pk.025798fb95072c0fb2b76c1ad03e9da6';
        $lat = $location->latitude;
        $lon = $location->longitude;
        $api_query = 'https://us1.locationiq.com/v1/reverse.php?key=' . $key . '&lat=' . $lat . '&lon=' . $lon . '&accept-language=ID&format=json';
        $response = @file_get_contents($api_query);
        $decoded = json_decode($response, true);
        $address = $decoded['address'];

        if ($address['city'] == 'Daerah Khusus Ibukota Jakarta') {
            $kota = 'Jakarta';
        } elseif ($address['city'] == 'Daerah Istimewa Yogyakarta') {
            $kota = 'Yogyakarta';
        } else {
            $kota = $address['city'];
        }

        if (array_key_exists('state', $address)) {
            $provinsi = $address['state'];
        } else {
            if ($kota == 'Jakarta') {
                $provinsi = 'DKI Jakarta';
            } else {
                $provinsi = $kota;
            }
        }

        $varianoleh = DB::table('varianoleh')->get();

        $olehKolega = DB::table('varianoleh')
            ->join('lokasi', 'lokasi.idlokasi', '=', 'varianoleh.idlokasi')
            ->where([
                ['kota', '=', $kota],
                ['namacocok', 'like', '%Perseorangan%'],
                // ['favorit_count', '>', 0]
            ])
            ->orderBy('favorit_count', 'desc')
            ->orWhere([
                ['provinsi', '=', $provinsi],
                ['namacocok', 'like', '%Perseorangan%'],
                // ['favorit_count', '>', 0]
            ])
            ->limit(12)
            ->get();

        $olehKeluarga = DB::table('varianoleh')
            ->join('lokasi', 'lokasi.idlokasi', '=', 'varianoleh.idlokasi')
            ->where([
                ['kota', '=', $kota],
                ['namacocok', 'like', '%Group%'],
                // ['favorit_count', '>', 0]
            ])
            ->orderBy('favorit_count', 'desc')
            ->orWhere([
                ['provinsi', '=', $provinsi],
                ['namacocok', 'like', '%Group%'],
                // ['favorit_count', '>', 0]
            ])
            ->limit(12)
            ->get();

        $olehPopuler = DB::table('varianoleh')
            ->join('lokasi', 'lokasi.idlokasi', '=', 'varianoleh.idlokasi')
            ->where([
                ['kota', '=', $kota],
                ['favorit_count', '>', 0]
            ])
            ->orWhere([
                ['provinsi', '=', $provinsi],
                ['favorit_count', '>', 0]
            ])
            ->orderBy('favorit_count', 'desc')

            ->limit(12)
            ->get();

        $harga = DB::table('varianoleh')
            ->join('lokasi', 'lokasi.idlokasi', '=', 'varianoleh.idlokasi')
            ->where([
                ['kota', '=', $kota],
                ['hargamin', '<=', 40000]
            ])
            ->orWhere([
                ['provinsi', '=', $provinsi],
                ['hargamin', '<=', 40000]
            ])
            ->get();

        $pernahwisata = '';
        $lokasilalu = '';

        if (auth()->user() != null) {
            $pernahwisata = DB::table('users')
                ->where('id', '=', auth()->user()->id)
                ->get();

            $lokasipernah = '';
            foreach ($pernahwisata as $pw) {
                $lokasipernah = preg_split('/,/', $pw->pernah_wisata);
            }
            if (count($lokasipernah) == 3) {
                $lokasilalu = DB::table('varianoleh')
                    ->join('lokasi', 'lokasi.idlokasi', '=', 'varianoleh.idlokasi')
                    ->where('kota', '=', $lokasipernah[0])
                    ->orWhere('kota', '=', $lokasipernah[1])
                    ->orWhere('kota', '=', $lokasipernah[2])
                    ->get();
            } elseif (count($lokasipernah) == 2) {
                $lokasilalu = DB::table('varianoleh')
                    ->join('lokasi', 'lokasi.idlokasi', '=', 'varianoleh.idlokasi')
                    ->where('kota', '=', $lokasipernah[0])
                    ->orWhere('kota', '=', $lokasipernah[1])
                    ->get();
            } elseif (count($lokasipernah) == 1) {
                $lokasilalu = DB::table('varianoleh')
                    ->join('lokasi', 'lokasi.idlokasi', '=', 'varianoleh.idlokasi')
                    ->where('kota', '=', $lokasipernah[0])
                    ->get();
            }
        }
        return view('index', compact('kota', 'provinsi', 'olehKolega', 'olehKeluarga', 'olehPopuler', 'harga', 'pernahwisata', 'lokasilalu'));
    }
}
