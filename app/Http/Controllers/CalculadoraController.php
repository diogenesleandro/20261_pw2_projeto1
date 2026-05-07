<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadoraController extends Controller
{
    public function index() {
        return view('calculadora');
    }

    public function calcular(Request $request) {
        // 1. O "Segurança" (Validação)
    $dados = $request->validate([
        'num1' => 'required|numeric',
        'num2' => 'required|numeric',
        'operacao' => 'required|in:soma,sub,mult,div',
    ], [
        'required' => 'O campo :attribute é obrigatório!',
        'numeric' => 'Digite apenas números!'
    ]);

        $n1 = $dados['num1'];
        $n2 = $dados['num2'];
        $op = $dados['operacao'];
        $resultado = 0;

        if($op == 'soma') $resultado = $n1 + $n2;
        elseif($op == 'sub') $resultado = $n1 - $n2;
        elseif($op == 'mult') $resultado = $n1 * $n2;
        elseif($op == 'div') $resultado = $n2 != 0 ? $n1 / $n2 : 'Erro (divisão por zero)';

        return view('calculadora', ['resultado' => $resultado]);
    }
}
