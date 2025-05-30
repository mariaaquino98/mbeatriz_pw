<?php
include_once("../config/database/database.php");

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $sala = $_POST['sala'];
    $descricao = $_POST['descricao'];
    $nome = $_POST['nome'];
    $dataehora = $_POST['dataehora'];

    $sql = "INSERT INTO contatos (sala, descricao, nome, dataehora) VALUES ('$sala', '$descricao', '$nome', 'dataehora')";

    $con->query($sql);
    header("Location: ../index.php");
    exit();

}

?>

