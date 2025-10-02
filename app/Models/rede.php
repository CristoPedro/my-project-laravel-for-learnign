<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rede extends Model
{
    //Model redes

    protected $table = "redes";

        protected $fillable = [
        'nome',
        'link'
    ];

}
