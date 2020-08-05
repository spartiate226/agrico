<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable=['produit_id','chemin'];
    function Produit(){
        return $this->belongsTo(Produit::class);
    }
}
