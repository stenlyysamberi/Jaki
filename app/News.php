<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $guarded = [];
    protected $table = 'tbl_news';
    protected $primaryKey = 'id_news';
}
