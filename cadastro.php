<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Aluno</title>
</head>
<body>
    <h1>Cadastro de Alunos</h1>    

    <form action="processa.php" method="post">
        <label for="nome">Digite seu nome:</label>
        <input type="text" id="nome" name="nome">

        <br><label for="idade">Digite sua idade:</label>
        <input type="text" id="idade" name="idade">

        <br><label for="genero">Gênero</label>
        <select name="genero" id="genero">
            <option value="Masculino">Masculino</option>
            <option value="Feminino">Feminino</option>
            <option value="Não Informar">Não Informar</option>
        </select>

        <button>Enviar</button>

    </form>

 

</body>
</html>