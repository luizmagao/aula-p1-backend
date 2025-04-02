<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Serie;
use App\Models\Episodio;

class Temporada extends Model
{
    protected $fillable = ['numero'];

    public function serie()
    {
        return $this->belongsTo(Serie::class);
    }

    public function episodios()
    {
        return $this->hasMany(Episodio::class, 'temporada_id', 'id');
    }
}
