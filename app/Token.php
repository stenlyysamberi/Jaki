<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Token extends Model
{
    protected $guarded = [];
    protected $table = 'tbl_tokens';
    protected $primaryKey = 'id_token';
}
