<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    protected $guarded = [];
    protected $table = 'venues';
    protected $primaryKey = 'id_venue';
}
