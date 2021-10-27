<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Docs extends Model
{
    //
    protected $fillable = [
        'voc',
        'vbeban',
        'ibeban',
        'suhu',
        'kelembaban',
        'irradiasi',
        'daya'
    ];
}
