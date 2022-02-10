<?php

namespace App\Http\Controllers;

use App\Models\Publicacion;
use Illuminate\Http\Request;

class PublicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $publicacion = Publicacion::latest()->paginate(5);
    
        return view('publicaciones.index',compact('publicacion'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('publicaciones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'titulo' => 'required',
            'extracto'=>'required',
            'contenido'=>'required',
            'acceso'=>'required',
            'comentable'=>'required',
            'caducable'=>'required',
            
            
        ]);
        Publicacion::create($request->all());


     
        return redirect()->route('publicaciones.index')
                        ->with('success','Publicacion P. Con exito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Publicacion  $publicacion
     * @return \Illuminate\Http\Response
     */
    public function show(Publicacion $publicacion)
    {
        //
        return view('publicaciones.show',compact('publicacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Publicacion  $publicacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Publicacion $publicacion)
    {
        //
        return view('publicaciones.edit',compact('publicacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Publicacion  $publicacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Publicacion $publicacion)
    {
        //
        $request->validate([
            'titulo' => 'required',
            'extracto'=> 'required',

            
        ]);
    
        $publicacion->update($request->all());
    
        return redirect()->route('publicaciones.index')
                        ->with('success','publication updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Publicacion  $publicacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Publicacion $publicacion)
    {
        //
        $publicacion->delete();
    
        return redirect()->route('publicaciones.index')
                        ->with('success','publication deleted successfully');
    }
}
