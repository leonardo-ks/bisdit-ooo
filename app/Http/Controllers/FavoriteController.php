<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class favoriteController extends Controller
{
    public function favorit()
    {
        $favorit='';
        if (auth()->user() != null) {
            $favorit = DB::table('favorit')
            ->join('varianoleh','varianoleh.idoleh','=','favorit.idoleh')
            ->where('favorit.id','=',auth()->user()->id)
            ->paginate(12);
        }
        return view ('favorituser',compact(['favorit']) );

    }

    public function hapusfavorit($idfavorit)
    {
	DB::table('favorit')->where('idfavorit',$idfavorit)->delete();

	return back()->with('info','Oleh-oleh Favorit Telah Dihapus');
    }
}
