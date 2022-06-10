<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kamer extends Model
{
    protected $fillable = [
        'nummer',
        'personen',
        'oppervlakte',
        'foto',
        'minibar'

    ];


}
