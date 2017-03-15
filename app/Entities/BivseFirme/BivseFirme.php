<?php

namespace App\Entities\BivseFirme;

use Illuminate\Database\Eloquent\Model;

class BivseFirme extends Model
{
    protected $table = 'bivse_firme';
    
    public $timestamps = false;
    
    protected $fillable = [
        'ime_firme'
    ];
    
    public function zaposleni()
    {
        return $this->belongsTo('App\Entities\Zaposleni\Zaposleni','zaposleni_id', 'id');
    }
}
