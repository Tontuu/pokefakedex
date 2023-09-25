<!-- TODO: Adicionar pokemons usando de exemplo a url "https://img.pokemondb.net/sprites/home/normal/pokemon.png" -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokemon</title>
    <link rel="stylesheet" href="./estilo.css">
</head>
<body>
    <?php include("navbar.php"); ?>
        <div class="pokedex">
            <!-- Importa todos os pokemons na database -->
            <?php
                echo "<style>";
                    echo ".ataque, .defesa, .velocidade {
                        display: flex;
                        flex-direction: column;  
                    }";
                echo "</style>";
                $connection = mysqli_connect("localhost", "root", '', "pokedex");
                if (!$connection) {
                    die("Não foi possivel conectar na database: " . mysqli_error());
                }
                $pokemon_result = mysqli_query($connection, "SELECT * FROM pokemons ORDER BY id ASC");

                if ($pokemon_result->num_rows == 0) {
                    header("666.php");
                }

                while ($pokemon = $pokemon_result->fetch_assoc()) {
                    $name = $pokemon['nome'];
                    $hp = $pokemon['hp'];
                    $atk = $pokemon['ataque'];
                    $def = $pokemon['defesa'];
                    $spd = $pokemon['rapidez'];
                    $desc = $pokemon['desc'];
                    $type_id1 = $pokemon['id_tipo1'];
                    $type_id2 = $pokemon['id_tipo2'];
                    if ($type_id2) {
                        $type_str2 = mysqli_query(
                            $connection,
                            "SELECT nome FROM `tipos`
                            WHERE id = $type_id2;" )->fetch_assoc()['nome'];
                    }
                    $type_str = mysqli_query(
                        $connection,
                        "SELECT nome FROM `tipos`
                         WHERE id = $type_id1;" )->fetch_assoc()['nome'];
                    echo "<div class='pokemon bulbasaur'>";
                        echo "<div class='shade $type_str'></div>";

                        echo "<div class='hp'>";
                            echo "<span>HP</span>";
                            echo "<span> $hp</span>";
                        echo "</div>";
                        echo "<div class='desc'>";
                            echo "<p>$desc</p>";
                        echo "</div>";

                        echo "<img src='https://img.pokemondb.net/sprites/home/normal/" . strtolower($name) . ".png' alt='$name'>";
                        echo "<span class='nome'>$name</span>";

                        echo "<div class='types $type_str'>";
                            echo "<span>".ucfirst($type_str)."</span>";
                            if ($type_id2) echo "<span>".ucfirst($type_str2)."</span>";
                        echo "</div>";


                        echo "<div class='stats'>";
                            echo "<div class='ataque'>";
                                echo "<span>$atk</span>";
                                echo "<span>Ataque</span>";
                            echo "</div>";
                            echo "<div class='defesa'>";
                                echo "<span>$def</span>";
                                echo "<span>Defesa</span>";
                            echo "</div>";
                            echo "<div class='velocidade'>";
                                echo "<span>$spd</span>";
                                echo "<span>Rapidez</span>";
                            echo "</div>";
                        echo "</div>";
                    echo "</div>";
                }
                mysqli_close($connection);
            ?>
            

        </div>

</body>

</html>