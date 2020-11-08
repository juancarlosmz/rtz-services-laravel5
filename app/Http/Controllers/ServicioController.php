<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServicioController extends Controller{
    
    public function servicio(){
        $results = DB::select( DB::raw('select * FROM servicios ;') );   
        return response()->json([
            200 => 'OK',
            'result' => $results,
        ], 200);
    }
    
}
