<form action="/processar" method="POST">
    @csrf <input type="text" name="nome" placeholder="Digite seu nome">
    <button type="submit">Enviar Dados</button>
</form>