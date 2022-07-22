<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Transaksi extends Model
{
    protected $guarded = [];
    protected $table = 'transaksis';
    protected $primaryKey = 'id_transaksis';

    static function transakis(){
        $transaksi = DB::table('transaksis')
        ->join('tbl_users','transaksis.id_users','=','tbl_users.id_user')
        ->join('tbl_olaragas','transaksis.id_tiket_olaraga','=','tbl_olaragas.id_tiket_olaraga')
        ->join('tbl_wisatas','transaksis.id_wisata','=','tbl_wisatas.id_wisata');
        return $transaksi;
    }
}
