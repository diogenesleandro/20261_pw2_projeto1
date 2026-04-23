<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes - Mapa de Navegação da Aplicação
|--------------------------------------------------------------------------
*/

// 1. ROTA PADRÃO (HOME)
// Retorna a view 'welcome.blade.php' localizada em resources/views
Route::get('/', function () {
    return view('welcome');
});

// 2. ROTA SIMPLES
// Retorna apenas texto direto no navegador
Route::get('/teste', function () {
    return "Olá, esta é minha primeira rota!";
});

// 3. PARÂMETROS DINÂMICOS
// Captura o que o usuário digita após a barra (ex: /usuario/10)
Route::get('/usuario/{id}', function ($id) {
    return "Exibindo o perfil do usuário número: " . $id;
});

// 4. MÚLTIPLOS PARÂMETROS
Route::get('/post/{slug}/{comentario}', function ($slug, $comentario) {
    return "Post: " . $slug . " | Comentário ID: " . $comentario;
});

// 5. PARÂMETRO OPCIONAL
// A '?' indica que se não houver valor, assume o padrão 'Visitante'
Route::get('/nome/{nome?}', function ($nome = 'Visitante') {
    return "Olá, " . $nome;
});

// 6. REGRAS DE VALIDAÇÃO (WHERE)
// Só entra aqui se o {id} for composto apenas por números [0-9]
Route::get('/perfil/{id}', function ($id) {
    return "ID numérico válido: " . $id;
})->where('id', '[0-9]+');

// 7. ROTA NOMEADA (APELIDO)
// URL longa, mas apelido curto para usar em links: route('contato')
Route::get('/contato-da-empresa-setor-vendas', function () {
    return "Página de contato";
})->name('contato');


/*
|--------------------------------------------------------------------------
| FORMULÁRIOS E PROCESSAMENTO DE DADOS (POST)
|--------------------------------------------------------------------------
*/

// --- EXEMPLO 1: Formulário Simples ---
// Mostra o arquivo resources/views/formulario.blade.php
Route::get('/contato', function () {
    return view('formulario');
});

// Recebe os dados via POST. O objeto Request traz tudo o que foi digitado.
Route::post('/processar', function (Request $request) {
    $nome = $request->input('nome');
    return "Dados recebidos com sucesso! Olá, " . $nome;
});


// --- EXEMPLO 2: Formulário com Retorno de View ---
// 1. Rota para exibir a página de cadastro (GET)
Route::get('/cadastro', function () {
    // Certifique-se que o arquivo cadastro.blade.php está em resources/views
    return view('cadastro');
});

// 2. Rota para receber os dados do cadastro (POST)
Route::post('/enviar-cadastro', function (Request $request) {
    // Captura os campos 'name' definidos no HTML
    $nome = $request->input('nome_aluno');
    $idade = $request->input('idade_aluno');

    // Retorna a view 'exibir_dados.blade.php' passando as variáveis capturadas
    // O array associa o nome da variável no HTML => valor da variável PHP
    return view('exibir_dados', [
        'nome' => $nome,
        'idade' => $idade
    ]);
});