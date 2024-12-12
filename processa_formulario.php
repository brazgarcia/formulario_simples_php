<?php

try {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $estado = $_POST["estado"];
    $cidade = $_POST["cidade"];

    if(!empty($_POST["nome"])) {
        if(strlen($_POST["nome"]) < 3) {
            throw new Exception("Seu nome precisa conter no mínimo 3 caracteres.");
        }
    } else {
        throw new Exception('O campo "Nome" está vazio ou inexistente.');
    }

    if(empty($_POST["email"])) {
        throw new Exception('O campo "E-mail" está vazio ou inexistente.');
    }

    if(empty($_POST["cidade"])) {
        throw new Exception('O campo "Cidade" está vazio ou inexistente.');
    }

    $frase = "Olá, me chamo " . $nome . ", meu E-mail é: " . $email . ",";
    $frase .= " e sou da cidade de " . $cidade . " - " . $estado . ".";

    echo $frase;

} catch (Exception $e) {

    echo $e->getMessage();

}