<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Dados Recebidos</title>
</head>
<body>
    <h1>Dados Recebidos com Sucesso!</h1>
    
    <p><strong>Nome informado:</strong> {{ $nome }}</p>
    <p><strong>Idade informada:</strong> {{ $idade }} anos</p>
    
    <hr>
    <p>Status: O Laravel processou esses dados via POST.</p>
    
    <a href="/cadastro">Fazer novo cadastro</a>
</body>
</html>