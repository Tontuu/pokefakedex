<?php
    include("navbar.php");
    $connection = mysqli_connect("localhost", "root", "", "pokedex") or die("Erro ao se conectar com o banco de dados!");
    $nome_param = $_GET['nome'];
    $pokemon_data = mysqli_query($connection, "SELECT * FROM pokemons WHERE nome = '$nome_param'");
    if ($pokemon_data) {
        while ($result = $pokemon_data->fetch_assoc()) {
            $poke_name = $result['nome'];
            $poke_atk = $result['ataque'];
            $poke_def = $result['defesa'];
            $poke_spd = $result['rapidez'];
            $poke_hp = $result['hp'];
            $poke_desc = $result['desc'];
            $poke_tipo1 = $result['id_tipo1'];
            $poke_tipo2 = $result['id_tipo2'];
            $poke_id = $result['id'];
        }
    }else {
        echo "<script type='text/javascript'>window.top.location='./666.php';</script>"; exit;
    }
?>

<div class='summary'>
    <div class='top-container'>
        <div class="head">
            <a href="./pokemoooooooon.php"><- Pokedex</a>
            <?php echo "<p>#$poke_id</p>"?>
        </div>
        <?php 
            $url = 'https://img.pokemondb.net/sprites/home/normal/' . strtolower($poke_name) . '.png';
            echo "<img src='$url' alt='$poke_name Main Image'>"; 
        ?>
    </div>
    <div class="bottom-container">
        <?php echo "<h1>$poke_name</h1>"; ?>
    </div>
</div>