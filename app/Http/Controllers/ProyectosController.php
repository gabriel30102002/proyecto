<?php

namespace App\Http\Controllers;

use App\Models\proyecto;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class ProyectosController extends Controller
{
   
    public function index()
    {
        $proyecto = DB::table('proyectos')->get();
        return view('proyecto.proyecto',['proyecto'=> $proyecto]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('proyecto.template');
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
       
        proyecto::create($request->all());
        return redirect()->route('proyecto.index')->with('success','Proyecto creado succesfully.');
    
    
    }
    /**
     * Display the specified resource.
     */
    public function show(Proyectos $proyectos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @param \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto = Producto::find($id);
        return view('producto.edit', compact('producto'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|max:255',
            'descripcion' => 'required',
        ]);
        $producto = Producto::find($id);
        $producto->update($request->all());
        return redirect()->route('producto.index')->with('success','Post updated succesfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $producto = Producto::find($id);
        $producto->delete();
        return redirect()->route('producto.index')->with('success','product deleted successfully');
        
    }
}