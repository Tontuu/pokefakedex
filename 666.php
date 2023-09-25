<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error 404 - Página não encontrada</title>
    <link rel="stylesheet" href="./estilo.css">
</head>

<style>
    html {
        overflow: hidden;
    }
    body {
        background-image: url("assets/background-error.png");
    }
    .container-404 {
        font-family: Arial, sans-serif;
        text-align: center;
        margin: 0;
        height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    .error-card {
        display: flex;
        flex-direction: column;
        justify-content: center;
        color: #1f0a0a;
        background-image: url("assets/yellow-wallpaper.png");
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 20px;
        width: 80vw;
        height: 80vh;
        margin-bottom: 30px;
        box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
        position: relative;
    }
    .error-card img {
        position:absolute;
        width: 34vw;
        right: -10%;
        bottom: 0;
    }
    .text-container {
        transform: scale(1.1);
        max-width: 45%;
        padding: 0 5%;
        text-align: left;
    }
    .text-container h1 {
        font-size: 48pt;
    }
    .text-container h2 {
        font-size: 22pt;
        margin-bottom: 10px;
    }
    .text-container p {
        font-size: 14pt;
        margin-bottom: 20px;
    }
    .text-container a {
        text-decoration: none;
        color: #007BFF;
        font-weight: bold;
    }
    a.button {
        display: inline-block;
        padding: 10px 20px;
        background-color: #ff6969;
        color: #fbfdff;
        text-decoration: none;
        border-radius: 4px;
        font-weight: bold;
        transition: background-color 0.3s;
    }
    a.button:hover {
        background-color: #e03f95;
    }
</style>

<?php
include("navbar.php");
?>

<div class="container-404">
    <div class="error-card">
        <img src="assets/psyduck_error2.png" alt="Psyduck Error">
        <div class="text-container">
            <h1>Erro - 666</h1>
            <h2>Pokemon não encontrado</h2>
            <p>O pokemon que você está procurando talvez não exista, foi extinto ou morreu de leptospirose.</p>
            <a class="button" href="./pokemoooooooon.php">Voltar à tela inicial</a>
        </div>
    </div>    


</div>