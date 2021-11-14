<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FilterController extends Controller
{
    public function daerahasal(){
        $daerahasal = DB::table('lokasi')->paginate(8);
        return view('daerahasal',['daerahasal'=>$daerahasal]);
    }
}
