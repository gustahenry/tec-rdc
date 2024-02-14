<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class CalibracaoController extends Controller
{
    public function show()
    {
        $caminhoArquivoJson = public_path('calibracao.json');

        if (file_exists($caminhoArquivoJson)) {
            $calibracaoData = json_decode(file_get_contents($caminhoArquivoJson), true);

            return View::make('calibracoes')->with('calibracaoData', $calibracaoData);
        } else {
            abort(404, 'Arquivo calibracao.json não encontrado.');
        }
    }
}
