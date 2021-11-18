<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\favorite;

class FavoriteController extends Controller
{
    protected $cid;
    public function favorite($idoleh){

        $this->cid = auth()->user()->id;
        if(!favorite::where(['idoleh'=>$idoleh,'id'=>$this->cid])->exists()){
            favorite::create(['idoleh'=>$idoleh,'id'=>$this->cid]);
            return redirect()->back()->with('success', 'Oleh oleh Favorit berhasil ditambahkan');
        } else {
            return redirect()->back()->with('error', 'Oleh oleh Favorit sudah ditambahkan');
        }
    }

}
