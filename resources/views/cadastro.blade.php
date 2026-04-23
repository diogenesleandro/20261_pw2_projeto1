<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro Inicial</title>
</head>
<body>
    <h1>Novo Cadastro</h1>
    
    <form action="/enviar-cadastro" method="POST">
        @csrf <label>Nome:</label>
        <input type="text" name="nome_aluno" required>
        <br><br>
        
        <label>Idade:</label>
        <input type="number" name="idade_aluno" required>
        <br><br>
        
        <button type="submit">Enviar para o Servidor</button>
    </form>
</body>
</html>