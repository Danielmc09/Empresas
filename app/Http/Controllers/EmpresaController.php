<?php

namespace App\Http\Controllers;

use App\Http\Requests\Validacioncompanies;
use App\Models\Companies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos=Companies::paginate(10);
        return view('empresa.index',compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empresa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Validacioncompanies $request)
    {
        $datosEmpresa=request()->except('_token');
        if($request->hasFile('logo')){
            $datosEmpresa['logo']=$request->file('logo')->store('upload','public');
        }

        Companies::insert($datosEmpresa);

        return redirect()->route('empresa.index')->with('mensaje', 'Empresa creada con exito');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $compani=Companies::findOrFail($id);

        return view('empresa.edit',compact('compani')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Validacioncompanies $request, $id)
    {
        $datosEmpresa=request()->except(['_token','_method']);

        if($request->hasFile('logo')){

            $compani= Companies::findOrFail($id);

            Storage::delete('public/.$compani->logo');

            $datosEmpresa['logo']=$request->file('logo')->store('upload','public');
        }

        Companies::where('id','=',$id)->update($datosEmpresa);
        
        $compani= Companies::findOrFail($id);

        return redirect()->route('empresa.index',compact('compani'))->with('mensaje', 'Empresa actualizada con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $compani= Companies::findOrFail($id)->delete();
        return redirect()->route('empresa.index',compact('compani'));
    }
}
