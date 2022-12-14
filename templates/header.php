<?php
    include_once("helpers/url.php");
    include_once("data/categories.php");
    include_once("data/posts.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog do Codigo</title>

    <!-- CSS do blog-->
    <link rel="stylesheet" href="<?= $BASE_URL ?>/css/styles.css">

    <!-- Fontes Google-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <a href="<?= $BASE_URL ?>" id=logo>
            <img src="img/logo.svg" alt="Blog Codar">
        </a>
        <ul id="navbar">
            <li><a href="<?= $BASE_URL ?>"class="nav-link">HOME</a></li>
            <li><a href="#"class="nav-link">CATEGORIAS</a></li>
            <li><a href="#"class="nav-link">SOBRE</a></li>
            <li><a href="#"class="nav-link">CONTATO</a></li>
        </ul>
    </header>