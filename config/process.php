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

    function getSearch(){
        
    }
?>