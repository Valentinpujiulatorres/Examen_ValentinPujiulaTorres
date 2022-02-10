@extends('publicaciones.layout')
  
@section('content')
<div style="margin: 3%; background-color:white; padding :12%">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 style="margin-bottom: 50px;" >Publication info</h2>
            </div>
            <div class="pull-right">
                <a style="margin-right: 50px;" class="btn btn-primary" href="{{ route('publicacion.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Titulo:</strong>
                {{ $publicacion->titulo }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Extracto</strong>
                {{ $publicacion->extracto }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>acces</strong>
                
                {{ $publicacion->acceso }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>caducable</strong>
                {{$publicacion->caducable ? 'true' : 'false'}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>comentable</strong>
                {{$publicacion->comentable ? 'true' : 'false'}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Contenido</strong>
                <hr>
                {{ $publicacion->contenido }}
            </div>
        </div>
        
        
    </div>
</div>