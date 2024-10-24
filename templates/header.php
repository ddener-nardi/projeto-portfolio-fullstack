<?php 
    include_once("config/url.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css style -->
    <link rel="stylesheet" href="<?php $BASE_URL ?>styles.css">
    <!-- css bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- icons bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- swiperjs css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <title>Meu Portfolio</title> 
</head>
<body>
    <header>
        <nav class="d-flex justify-content-center">
            <div class="navigation mw-1390 w-100 d-flex align-items-center justify-content-between">
                <div class="logo">
                    <a href="<?php $BASE_URL ?>index.php"><span>Freiheit.</span></a>
                </div>
                <div class="navbar-container">
                    <ul class="d-flex list-unstyled mb-0">
                        <li><a href="<?php $BASE_URL ?>index.php">Quem sou Eu;</a></li>
                        <li><a href="<?php $BASE_URL ?>projetos.php">Meus Projetos;</a></li>
                        <li><a href="<?php $BASE_URL ?>index.php">Minhas Redes;</a></li>
                        <li><a href="<?php $BASE_URL ?>contato.php">Entre em contato.</a></li>
                    </ul>
                </div>
                <div class="nav-search-bar">
                    <form action="">
                        <div class="nav-search-form">
                            <label for="search"></label>
                            <input type="text" name="search" id="search" placeholder="O que você procura?">
                            <button><i class="bi bi-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </nav>
    </header>