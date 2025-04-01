<?php

session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: Login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar livros</title>
</head>
<body>
    <h1>Cadastrando livros</h1>
    <br>
    <form action="livros.txt" method="post">
        <label for="livro">Titulo do Livro</label>
        <input type="text" id="livro" name="livro">
        <br>
        <label for="autor">Nome do Autor</label>
        <input type="text" id="autor" name="autor">
        <br>
        <label for="editora">Nome da Editora</label>
        <input type="text" id="editora" name="editora">
        <br>
        <label for="ISBN">ISBN</label>
        <input type="int" id="ISBN" name="ISBN">
        <br>
        <br>
        <input type="submit" value="Cadastrar Livro">
    </form>    
</body>
</html>
