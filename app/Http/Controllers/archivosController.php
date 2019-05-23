<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Storage;
use Illuminate\Support\Facades\Validator;

class archivosController extends Controller
{
    
    public function _construct(){
        $this->middleware('usuarioAdmin');
    }

    public function guardar_archivos(Request $request){
        $rutaarchivos = "../storage/archivos/";
        $hora = date("h:i:s");
        $fecha = date("d-m-Y");
        $prefijo = $fecha."_".$hora;
        $archivo = $request->file('file_formulario');
        $input = array('file_formulario' => $archivo);
        $reglas = array('file_formulario' => 'required|mimes:pdf,png,jpeg|max:50000');
        /*
            recordar que para activar mimes se debe descomentar la línea de código extension = php_fileinfo.dll del php.ini
            cd /usr/share/doc/php-common-7.2.17/
        */
        $validacion = Validator::make($input, $reglas);
        if ($validacion->fails()) {
            return view("mensajes.plantillamensaje")
            ->with('var', '2')
            ->with('ruta_boton', 'ver_archivos')
            ->with('mensaje_boton', 'Ver Archivos')
            ->with('msj', 'El archivo no es un pdf, png, jpg o es demasiado grande para subirlo');
            # code...
        }
        else{
            $ruta = $prefijo.'_'.$archivo->
                getClientOriginalName();
            $r1 = Storage::disk('archivos')->put($ruta,\File::get($archivo));
            if ($r1) {
                return view("mensajes.plantillamensaje")
                ->with('var', '1')
                ->with('ruta_boton', 'ver_archivos')
                ->with('mensaje_boton', 'Ver Archivos')
                ->with('msj', 'Archivo guardado correctamente');
                # code...
            }
            else{
                return view("mensajes.plantillamensaje")
                ->with('var', '2')
                ->with('ruta_boton', 'ver_archivos')
                ->with('mensaje_boton', 'Ver Archivos')
                ->with('msj', 'Error al subir el archivo');
            }
        }
    } 

    public function form_archivos(){
        return view("archivos.form_agregar_archivos");
    }


    public function ver_archivos(){
        
        $rutaarchivos= "../storage/archivos/";
        $directorio = opendir($rutaarchivos);
        $lista_archivos = array();
        while (($file = readdir($directorio)) !== false){
            array_push($lista_archivos,$file);
        }
        closedir($directorio);
        return view("archivos.ver_archivos")
        ->with("lista_archivos", $lista_archivos)
        ->with("rutaarchivos", $rutaarchivos);      
    }


    public function descargar_archivo($nombre_archivo){
        $rutaarchivo= "../storage/archivos/".$nombre_archivo;
        return response()->download($rutaarchivo);
    }   

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
