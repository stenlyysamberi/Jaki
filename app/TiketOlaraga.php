<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TiketOlaraga extends Model
{
    protected $guarded = [];
    protected $table = 'tbl_olaragas';
    protected $primaryKey = 'id_tiket_olaraga';
}
