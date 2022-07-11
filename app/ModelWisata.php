<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelWisata extends Model
{
    protected $guarded = [];
    protected $table = 'tbl_wisatas';
    protected $primaryKey = 'id_wisata';
}
