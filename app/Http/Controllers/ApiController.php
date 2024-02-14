<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function __invoke(Request $request)
    {
        $jsonPath = public_path('api.json');

        if (File::exists($jsonPath)) {
            $jsonData = json_decode(File::get($jsonPath), true);
            $equipamentos = array_keys($jsonData);
            return view('consulta', ['equipamentos' => $equipamentos, 'data' => $jsonData]);
        } else {
            return response()->json(['error' => 'Arquivo JSON não encontrado'], 404);
        }
    }
}



