<?php

namespace App\Http\Controllers;

use App\Http\Requests\Validacionemployees;
use App\Models\Companies;
use App\Models\Employees;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos=Employees::all();
        return view('empleado.index',compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $compa = Companies::all();
        return view('empleado.create',compact('compa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Validacionemployees $request)
    {
        Employees::create($request->all());
        return redirect()->route('empleado.index')->with('mensaje', 'Empleado creado con exito');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empleado = Employees::find($id);
        $compa = Companies::all();
        return view('empleado.edit',compact('empleado','compa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Validacionemployees $request, $id)
    {
        Employees::findOrFail($id)->update($request->all());
        return redirect()->route('empleado.index')->with('mensaje', 'Empleado creado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $empleado = Employees::find($id)->delete();
        return redirect()->route('empleado.index');
    }
}
