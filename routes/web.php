<?php

use App\Entities\Zaposleni\Zaposleni;
use App\Entities\BivseFirme\BivseFirme;

use Illuminate\Database\Eloquent\Model;

Route::get('/kreirajZaposlenog' , function(){
    return view('unesi');
});

Route::get   ('/' ,                  '\App\Http\Controllers\ZaposleniController@sviZaposleni' );
Route::post  ('/dodajZaposlenog',    '\App\Http\Controllers\ZaposleniController@dodajZaposlenog');
Route::get   ('/sviZaposleni' ,      '\App\Http\Controllers\ZaposleniController@sviZaposleni' );
Route::get   ('/{id}/editProduct',   '\App\Http\Controllers\ZaposleniController@editZaposleni');
Route::post  ('/{id}',               '\App\Http\Controllers\ZaposleniController@updateZaposleni');
Route::delete('/delete/{product_id}','\App\Http\Controllers\ZaposleniController@deleteZaposleni');

