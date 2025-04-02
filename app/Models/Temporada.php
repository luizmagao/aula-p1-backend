<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Temporada extends Model
{
    public function serie()
    {
        return $this->belongsTo(Serie::class);
    }
}
