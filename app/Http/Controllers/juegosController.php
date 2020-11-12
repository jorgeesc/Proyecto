<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
Use Redirect;
use Illuminate\Support\Facades\DB;
use App\Models\Juegos;
use App\Models\Genero;


class juegosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); 
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tableJuegos = DB::table('juegos')
        ->join('genero', 'juegos.genero_id', '=', 'genero.id')
        ->select('juegos.*', 'genero.nombre as genero')
        ->get();

        return view('Juegos.index', ["tableJuegos" =>  $tableJuegos ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tableJuegos = Genero::orderBy('nombre')->get()->pluck('nombre','id');
        return view('Juegos.create',[ 'tableJuegos' => $tableJuegos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|min:5|max:100',
            'descripcion' => 'required|min:10|max:1000',
            'precio' => 'required|numeric|min:0',
            'stock' => 'required|min:1|max:4',
            
        ]);

        $mJuegos = new Juegos($request->all());
        if($request->status){
            $mJuegos->status = true; 
        } else {
            $mJuegos->status = false;
        }

        $mJuegos->save();

        $file = $request->file('imagen');
        if($file){
        $imgNombreVirtual = $file->getClientOriginalName();
        $imgNombreFisico = $mJuegos->id.'-'.$imgNombreVirtual;
        \Storage::disk('local')->put($imgNombreFisico, \File::get($file));
        $mJuegos->imgNombreVirtual = $imgNombreVirtual;
        $mJuegos->imgNombreFisico = $imgNombreFisico;
        $mJuegos->save();
        }
        // Regresa a lista de productos
        Session::flash('message', 'Juego registrado');
        return Redirect::to('Juegos');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $modelo = Juegos::find($id);
        return view('Juegos.show', ["modelo" => $modelo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $modelo = Juegos::find($id);
        $tableJuegos = Genero::orderBy('nombre')->get()->pluck('nombre','id');
        return view('Juegos.edit', ["modelo" => $modelo, "tableJuegos"=>$tableJuegos]);
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
        $validatedData = $request->validate([
            'nombre' => 'required|min:5|max:100',
            'descripcion' => 'required|min:10|max:1000',
            'precio' => 'required|numeric|min:0',
            'stock' => 'required|min:1|max:4',
            'genero_id' => 'required|exists:genero,id'
            
        ]);

        $mJuegos = Juegos::find($id);
        $mJuegos->fill($request->all());
        if($request->status){
            $mJuegos->status = true; 
        } else {
            $mJuegos->status = false;
        }

        $mJuegos->save();

        $file = $request->file('imagen');
        if($file){
        $imgNombreVirtual = $file->getClientOriginalName();
        $imgNombreFisico = $mJuegos->id.'-'.$imgNombreVirtual;
        \Storage::disk('local')->put($imgNombreFisico, \File::get($file));
        $mJuegos->imgNombreVirtual = $imgNombreVirtual;
        $mJuegos->imgNombreFisico = $imgNombreFisico;
        $mJuegos->save();
        }
        // Regresa a lista de productos
        Session::flash('message', 'Juego actualizado');
        return Redirect::to('Juegos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mJuegos = Juegos::find($id);
        $mJuegos->delete();
        Session::flash('message', 'Juego eliminado');
        return Redirect::to('Juegos');
    }
}
