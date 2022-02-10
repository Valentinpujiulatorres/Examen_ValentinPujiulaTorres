@extends('publicaciones.layout')

@section('content')

<head>
    <style>
        .tds {
            background-color: #F5F5DC;
        }
    </style>

</head >
    <div class="row" >
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 style="font-family: Verdana, Geneva, Tahoma, sans-serif;">PUBLICACIONES</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('publicacion.create') }}"> Create New Record</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <table class="table table-bordered border-success">
        <tr class="tds">
            <th>No</th>
            <th>Titulo</th>
            <th>extracto</th>
            <th>contenido</th>
            <th>acceso</th>
            <th>caducable</th>
            <th>comentable</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($publicacion as $publicacio)
        
        
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $publicacio->titulo }}</td>
            <td>{{ $publicacio->extracto }}</td>
            <td>{{ $publicacio->contenido}}</td>
            <td>{{$publicacio->acceso}}</td>
            <td>{{$publicacio->caducable ? 'true' : 'false'}}</td>
            <td>{{$publicacio->comentable ? 'true' : 'false'}}</td>
            <td>

                <form action="{{ route('publicacion.destroy',$publicacio->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('publicacion.show',$publicacio->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('publicacion.edit',$publicacio->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')
                    @can('isAdmin')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    @else
                    <button type="submit" class="btn btn-danger" disabled>Delete</button>
                    @endcan
                </form>
            </td>
        </tr>
        @endforeach
</table>

{!! $publicacion->links() !!}

@endsection