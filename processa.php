<?php 

if(isset($_POST["nome"]) && isset($_POST["idade"]) && isset($_POST["genero"])){
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $genero = $_POST["genero"];
} else {
    unset($nome);
    unset($idade);
    unset($genero);
}

if(isset($nome) && isset($idade) && isset($genero)){
        echo "<p>Seu nome é " .  $nome; 
        echo "<br>Sua idade é " .  $idade;
        echo "<br><strong>Gênero:</strong> " . $genero;
    }

?>