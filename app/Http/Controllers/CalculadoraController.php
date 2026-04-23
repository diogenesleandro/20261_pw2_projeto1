<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadoraController extends Controller
{
    public function index() {
        return view('calculadora');
    }

    public function calcular(Request $request) {
        $n1 = $request->num1;
        $n2 = $request->num2;
        $op = $request->operacao;
        $resultado = 0;

        if($op == 'soma') $resultado = $n1 + $n2;
        elseif($op == 'sub') $resultado = $n1 - $n2;
        elseif($op == 'mult') $resultado = $n1 * $n2;
        elseif($op == 'div') $resultado = $n2 != 0 ? $n1 / $n2 : 'Erro (divisão por zero)';

        return view('calculadora', ['resultado' => $resultado]);
    }
}
