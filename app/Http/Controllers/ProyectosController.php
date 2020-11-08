<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProyectosController extends Controller{
    public function proyecto(){
        $results = DB::select( DB::raw('select * FROM proyectos;') );   
        return response()->json([
            200 => 'OK',
            'result' => $results,
        ], 200);
    }
    public function unproyecto($titulo){
        $results = DB::select( DB::raw('select servicios.titulo as serviciotitulo,servicios.imagen as servicioimagen,proyectos.titulo, proyectos.imagen, proyectos.descripcion,proyectos.direccion, proyectos.partida,proyectos.cliente,proyectos.periodo FROM proyectos INNER JOIN servicios ON servicios.id = proyectos.idservicio where proyectos.titulo = "'.$titulo.'";') );   
        return response()->json([
            200 => 'OK',
            'result' => $results,
        ], 200);
    }
    
}
