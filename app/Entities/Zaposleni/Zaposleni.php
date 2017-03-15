<?php

namespace App\Entities\Zaposleni;

use Illuminate\Database\Eloquent\Model;

class Zaposleni extends Model
{
    protected $table = 'zaposleni';
    
    public $timestamps = false;
    
    protected $fillable = [
        'ime', 'prezime', 'zanimanje'
    ];
    
    public function bivseFirme()
    {
        return $this->hasMany('App\Entities\BivseFirme\BivseFirme','zaposleni_id', 'id');
    }
}
