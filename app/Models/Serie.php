<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Temporada;

class Serie extends Model
{
    //
    protected $fillable = ['titulo'];

    public function temporadas()
    {
        return $this->hasMany(Temporada::class, 'serie_id', 'id');
    }
}
