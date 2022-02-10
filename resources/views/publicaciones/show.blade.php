@extends('peliculas.layout')
  
@section('content')
<div style="margin: 3%; background-color:white; padding :12%">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 style="margin-bottom: 50px;" >FILM INFO</h2>
            </div>
            <div class="pull-right">
                <a style="margin-right: 50px;" class="btn btn-primary" href="{{ route('peliculas.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <!-- <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <img src="/image/{{ $pelicula->image }}" width="400px">
            </div>
        </div> -->
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $pelicula->nombre }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>saga</strong>
                {{ $pelicula->saga }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Age Rating</strong>
                
                {{ $pelicula->calificacion }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Lanzamiento</strong>
                {{ $pelicula->lanzamiento }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>En Emision ?</strong>
                {{ $pelicula->emision}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>SINOPSIS</strong>
                <hr>
                {{ $pelicula->sinopsis }}
            </div>
        </div>
        
        
    </div>
</div>