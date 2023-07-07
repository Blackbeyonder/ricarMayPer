<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\empleados;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $s = empleados::all();
 
        //return response()->json(['data' => $s]);
        return view('admin.admin')->with("employees", $s);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        $empleados = empleados::create(
            [
                'clave_del_empleado' => 'asd',
                'nombre' => $request->nombre,
                'edad' => $request->edad,
                'fecha_nacimiento' => $request->fecha_nacimiento,
                'genero' => $request->genero,
                'sueldo_base' => $request->sueldo_base,
            ]
        );
        
        $s = empleados::all();
 
        //return response()->json(['data' => $s]);
        return view('admin.admin')->with("employees", $s);
    }

    public function form(Request $request)
    {
        return view('admin.form_employee');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $s = empleados::all();
 
        return response()->json(['data' => $s]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
