<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class detailController extends Controller
{
    //
    public function caro(){
        $varianoleh = DB::table('varianoleh')->get();
        return view('detail',['varianoleh'=> $varianoleh]);
    }
}
