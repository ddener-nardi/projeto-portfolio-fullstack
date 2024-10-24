<?php 
    $host = 'localhost';
    $db = 'portfolio_db';
    $user = 'root';
    $pass = '';

    try {

        $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

    } catch (PDOException $e) {
        
        $erro = $e->get_message();

        echo "Erro" . $erro;
    }
?>