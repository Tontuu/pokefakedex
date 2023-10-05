<style>
    <?php include './estilo.css';?>
</style>

<script src="lib/jquery-3.7.1.js"></script>
<script>
    function lookup(search) {
        if (search.length === 0) {
            // Esconde a parte de autocomplete
            $('#suggestions').hide();
            $('#suggestions').removeClass("active");
        } else {
            $.post("searchPokemon.php", { queryString: "" + search + "" }, function (data) {
                if (data.length > 0) {
                    $('#suggestions').show();
                    $('#suggestions').addClass("active");
                    $('#autoSuggestionsList').html(data);
                }
            });
        }
    } // lookup

    function fill(thisValue) {
        $('#inputString').val(thisValue);
        setTimeout("$('#suggestions').hide();", 200);
    }
</script>

<div class="nav">
    <div class="nav-header">
        <div class="nav-title">
            <a href="#">Pokemon</a>
        </div>
        <form action="pokemon.php" method="get">
            <label for="search">Search for stuff</label>
            <input id="search" type="search" placeholder="Buscar pokemon" onkeyup="lookup(this.value);" onblur="fill();"
                autofocus required />
            <div class="suggestionsBox" id="suggestions">
                <div class="suggestionList" id="autoSuggestionsList">
                </div>
                <script>
                    $(document).ready(function () {
                        $(".pokemon-link").click(function (e) {
                            e.preventDefault();
                            var nome = $(this).data('nome');
                            var url = "pokemon.php?nome=" + encodeURIComponent(nome);
                            window.location.href = url;
                        });
                    })
                </script>
            </div>
            <button type="submit">🔍</button>
        </form>

        <ul class="nav-links">
            <li><a href="#" target="_self">Home</a></li>
            <li><a href="#" target="_self">Adicionar</a></li>
            <li><a ref="#" target="_self">Excluir</a></li>
        </ul>
    </div>
    <div css="nav-btn">
        <button type="submit" class="nav-check">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>

</div>


<script>
    const burguer = document.querySelector(".nav-check");
    burguer.addEventListener("click", () => {
        document.querySelector(".nav-links").classList.toggle("active");
    })
</script>