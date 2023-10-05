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

        $poke_tipo_str1 = mysqli_query(
            $connection,
            "SELECT nome FROM `tipos`
                         WHERE id = $poke_tipo1;"
        )->fetch_assoc()['nome'];

    }
} else {
    echo "<script type='text/javascript'>window.top.location='./666.php';</script>";
    exit;
}
?>
 
<div class='summary <?php echo $poke_tipo_str1?>'>
    <div class="top">
        <?php echo "<img class='sprite' src='https://img.pokemondb.net/sprites/black-white/anim/normal/" . strtolower($poke_name) . ".gif' alt='$poke_name'>"; ?>
        <div class="info">
            <div class="info-title">
                <div class="top-info">
                    <img src="https://archives.bulbagarden.net/media/upload/7/75/Poké_Ball_battle_V.png" alt="">
                    <span><?php echo "$poke_id"; ?></span>
                </div>
                <div class="bottom-info">
                    <p><?php echo "$poke_name"; ?></p> 
                </div>
            </div>

            <!-- TODO: Colocar os tipos relativos -->
            <div class="types">
                <div class="type-1">Grama</div>
                <div class="type-2">Voador</div>
            </div>

            <div class="summary-stats">
                <div class="red-padd"></div>
                <div class="poke-stats">
                    <div>
                        <span>Ataque</span>
                        <span><?php echo "$poke_atk"; ?></span>
                    </div>
                    <div>
                        <span>Defesa</span>
                        <span><?php echo "$poke_def"; ?></span>
                    </div>
                    <div>
                        <span>Hp</span>
                        <span><?php echo "$poke_hp"; ?></span>
                    </div>
                    <div>
                        <span>Rapidez</span>
                        <span><?php echo "$poke_spd"; ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom">
        <div class="red-padd"></div>
        <p class="desc"><?php echo "$poke_desc"?></p>
        <div class="red-padd"></div>
    </div>
</div>