<?php

namespace App\Http\Controllers;

use App\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index(){

   
       return view('pages.transaksi',[
            "title1" => 'Jaki',
            "title2" => 'Tiket',
            "title3" => 'Top Up',
        ]);
    }


    public function transaki(){
         $transaksi = Transaksi::transakis()->get();
         return response()->json ([
            'transaksi' => $transaksi
        ]);
    }
}
