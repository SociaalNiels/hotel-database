<?php

namespace App;



use Illuminate\Database\Eloquent\Model;


class boeking extends Model
{
    protected $table = 'boeking';
    protected $fillable = [
        'datumboeking',
        'naam',
        'adres',
        'creditkaartnummer',
        'aankomstdatum',
        'vertrekdatum',
        'kamer_id'
    ];


    public function kamer()
    {
        return $this->belongsTo(kamer::class);
    }

    //public function getKamer()
    //{
    //    $kamer = Kamer::find($this->kamer_id);
//  return $kamer;
    // }
}


