<?php

namespace App\Http\Controllers;

use App\Entities\Zaposleni\Zaposleni;
use App\Entities\BivseFirme\BivseFirme;
use Illuminate\Http\Request;

class ZaposleniController extends Controller
{
    public function dodajZaposlenog(Request $request)
    {
        $zaposleni_data = $request->get('zaposleni');
        
        $zaposleni = new Zaposleni();
        $zaposleni->ime = $zaposleni_data['ime'];
        $zaposleni->prezime = $zaposleni_data['prezime'];
        $zaposleni->zanimanje = $zaposleni_data['zanimanje'];
        
        $zaposleni->save();
        
        $firme = $request->get('ime_firme');

        foreach ($firme as $firma) {
            $bivsa_firma = new BivseFirme();
            $bivsa_firma->ime_firme = $firma;
            $bivsa_firma->zaposleni_id = $zaposleni->id;
            $bivsa_firma->save(); 
        }

        return redirect('/sviZaposleni');

    }
    
    public function sviZaposleni()
    {
        $zaposleni = Zaposleni::all();
        $firme = BivseFirme::all();
        return view('zaposleni',['zaposleni'=>$zaposleni],['firme'=>$firme]);
    }
    
    public function editZaposleni($id)
    {
        $zaposleni = Zaposleni::findOrFail($id);
        $firme = BivseFirme::where('zaposleni_id',$id)->get();
        return view('edit',compact('zaposleni','firme'));
        
    }
    
    public function deleteZaposleni($id)
    {
        Zaposleni::findOrFail($id)->delete();
        
        return redirect('/sviZaposleni');
    }
    
    public function updateZaposleni(Request $request, $id)
    {

        $zaposleni_data = $request->get('zaposleni');
      
        $zaposleni = Zaposleni::findOrFail($id);
        $zaposleni->ime = $zaposleni_data['ime'];
        $zaposleni->prezime = $zaposleni_data['prezime'];
        $zaposleni->zanimanje = $zaposleni_data['zanimanje'];
       
        $zaposleni->save();
        
        BivseFirme::whereZaposleniId($id)->delete();
  
        $firme = $request->get('ime_firme');

        if($firme){
        foreach ($firme as $firma) {
            $bivsa_firma = new BivseFirme();
            $bivsa_firma->ime_firme = $firma;
            $bivsa_firma->zaposleni_id = $zaposleni->id;
            $bivsa_firma->save(); 
        }
        }
        return redirect('/sviZaposleni');
    }
  
}
