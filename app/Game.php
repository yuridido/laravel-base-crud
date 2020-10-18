<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = [
        'nome_gioco', 'casa_editrice', 'min_gioc', 'max_gioc'
    ];
}
