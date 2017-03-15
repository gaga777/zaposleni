@extends('layouts.template')
@section('title') Kreiraj Zaposlenog @stop
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Kreiraj Zaposlenog</h1>
            <form action="/public/dodajZaposlenog" method="post">
                <div class="col-md-6 col-md-offset-1">
                    <div class="form-group">
                        <label for="ime">Ime</label>
                        <input type="text" name="zaposleni[ime]" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="prezime">Prezime</label>
                        <input type="text" name="zaposleni[prezime]" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="zanimanje">Zanimanje</label>
                        <input type="text" name="zaposleni[zanimanje]" class="form-control">
                    </div>
                    <div class="form-group">
                        <h4>Radno iskustvo</h4>
                        <label class="radio-inline">
                            <input type="radio" name="iskustvo" checked="checked">bez radnog iskustva
                        </label>
                        <label class="radio-inline">
                            <input type="radio" id="sa_iskustvom" name="iskustvo">sa radnim iskustvom
                        </label>
                    </div>
                    <div class="form-group input_field_firma" id="show_firma" style="display: none;">
                        <h4>Prethodno radno iskustvo - ime_firme :</h4>
                        <button class="add_firma_button">Dodaj Firmu</button>
                        <div class="input-group"><input type="text" name="ime_firme[]" class="form-control" placeholder="Naziv firme" id="input_firma">
                        <span class="input-group-addon remove_field"><a href="#"><i class="fa fa-times"></i></a></span></div>
                        
                    </div>
                    <div class="form-group">
                        <input type="submit" name="create" value="Unesi" class="btn btn-primary">
                    </div>
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
        </div>
    </div>
</div>
@stop