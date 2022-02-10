@extends('publicaciones.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Publication</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('publicacion.index') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-warning">
        <strong>ALERT!</strong> Debes especificar los siguientes campos <br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('publicacion.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>titulo</strong>
                <input type="text" name="titulo" class="form-control" placeholder="titulo" value="{{old('titulo')}}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>extracto</strong>
                <input type="text" name="extracto" class="form-control" placeholder="exctracto" value="{{old('extracto')}}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>acceso</strong><br>

                <select class="form-control" aria-label="Default select example" name="acceso" id="calificacion" value="{old('acceso)}}" >
                    <option value="publico">publico</option>
                    <option value="privado">privado</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>caducable</strong><br>
                <div>
                <input  @if(old('caducable')=='1')) checked @endif type="checkbox" name="caducable" class="form-check" value="1">YES
                <input @if(old('caducable')=='0')) checked @endif type="checkbox" name="caducable" class="form-check" value="0">NO
                    
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>comentable</strong><br>
                <div>
                <input  @if(old('comentable')=='1')) checked @endif type="checkbox" name="comentable" class="form-check" value="1">YES
                <input @if(old('comentable')=='0')) checked @endif type="checkbox" name="comentable" class="form-check" value="0">NO
                    
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>contenido</strong>
                <textarea name="contenido" id="sinopsis" class="form-control" placeholder="contenido Here:" value="{{old('contenido')}}">{{old('sinopsis')}}</textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection