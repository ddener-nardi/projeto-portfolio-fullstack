<?php 
    session_start();

    include_once "connection.php";
    include_once "url.php";

    $id;

    function getProjects($connection){

        $projetos = [];

        $query = "SELECT * FROM projetos";

        $stmt = $connection->prepare($query);

        $stmt -> execute();

        return $stmt->fetchAll();
    }

    function findByTitle($connection, $nome){
        $projetos = [];

        $query = "SELECT * FROM projetos WHERE nome_projeto LIKE :nome_projeto";

        $stmt = $connection->prepare($query);

        $stmt -> bindValue(":nome_projeto", '%' .$nome. '%');

        $stmt -> execute();

        return $stmt->fetchAll();
    }
?>