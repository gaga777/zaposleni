@extends('layouts.template')
@section('title') Izmeni Zaposlenog @stop
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Izmeni Zaposlenog</h1>
            <form action="/public/{{$zaposleni->id}}" method="post">
                <div class="col-md-6 col-md-offset-1">
                    <div class="form-group">
                        <label for="ime">Ime</label>
                        <input type="text" name="zaposleni[ime]" class="form-control" value="{{$zaposleni->ime}}">
                    </div>
                    <div class="form-group">
                        <label for="prezime">Prezime</label>
                        <input type="text" name="zaposleni[prezime]" class="form-control" value="{{$zaposleni->prezime}}">
                    </div>
                    <div class="form-group">
                        <label for="zanimanje">Zanimanje</label>
                        <input type="text" name="zaposleni[zanimanje]" class="form-control" value="{{$zaposleni->zanimanje}}">
                    </div>
                    <div class="form-group input_field_firma">
                        <h4>Radno iskustvo - ime_firme :</h4>
                        <button class="add_firma_button">Dodaj Firmu</button>
                        @foreach($firme as $firma)
                            <div class="input-group"><input type="text" name="ime_firme[]" class="form-control" value="{{$firma->ime_firme}}" id="input_firma">
                            <span class="input-group-addon remove_field"><a href="#"><i class="fa fa-times"></i></a></span></div>
                        @endforeach
                        
                    </div>
                    <div class="form-group">
                        <input type="submit" name="update" value="Izmeni" class="btn btn-primary">
                    </div>
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
        </div>
    </div>
</div>
@stop