<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./estilo.css">
  <script src='lib/jquery-3.7.1.js'></script>
</head>

<?php
$connection = mysqli_connect("localhost", "root", "", "pokedex") or die ("Erro ao se conectar com o banco de dados!");
if (isset($_POST["queryString"])) {
    $queryString = $_POST['queryString'];
    if (strlen($queryString) > 0) {
        $query_result = mysqli_query($connection, "SELECT nome FROM pokemons WHERE nome LIKE '$queryString%';");
        if ($query_result) {
            while ($result = $query_result->fetch_assoc()) {
                $name = $result['nome'];
                echo "<a href='pokemon.php?nome=$name'>$name</a>";
            }
        }
    }
}
?>