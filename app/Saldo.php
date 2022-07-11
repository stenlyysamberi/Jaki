<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Saldo extends Model
{
    protected $guarded = [];
    protected $table = 'tbl_saldos';
    protected $primaryKey = 'id_saldo';
}
