@extends('layouts.template')
@section('title') Svi Zaposleni @stop
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">ZAPOSLENI</h1>
            <div class="col-12">
                <table class="table table-hover table-responsive">
                    <thead>
                        <tr>
                        <th style="width: 6%;"></th>
                        <th style="width: 18%;">Ime</th>
                        <th style="width: 18%;">Prezime</th>
                        <th style="width: 20%;">Zanimanje</th>
                        <th style="width: 20%;">Ime firme</th>
                        <th style="width: 10%;"></th>                       
                        <th style="width: 20%;"></th>
                        </tr>
                    </thead>
                    <tbody>                                               
                        @foreach($zaposleni as $zaposlen)
                            <tr id="zaposleni">
                                <td><span><i class="fa fa-plus"></i></span></td>
                                <td>{{$zaposlen->ime}}</td>
                                <td>{{$zaposlen->prezime}}</td>
                                <td>{{$zaposlen->zanimanje}}</td>
                                <td></td>
                                <td>
                                    {!! Form::open(['method'=>'DELETE', 'action'=>['ZaposleniController@deleteZaposleni',$zaposlen->id]]) !!}
                                        {!! Form::submit('Delete', ['class'=>'btn btn-danger btn-xs delete_link']) !!}
                                    {!! Form::close() !!}                              
                                </td>
                                <td>
                                    <a class="btn btn-success btn-xs" href="/public/{{$zaposlen->id}}/editProduct">Edit</a>
                                </td>
                            </tr>
                            @foreach($zaposlen->bivseFirme as $firma)
                            <tr id="prikaz_firmi" style="display: none;">
                                <td></td>
                                <td>{{$firma->zaposleni->ime}}</td>
                                <td>{{$firma->zaposleni->prezime}}</td>
                                <td>{{$firma->zaposleni->zanimanje}}</td>
                                <td>{{$firma->ime_firme}}</td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endforeach
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop