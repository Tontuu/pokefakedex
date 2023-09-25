<style>
    .nav {
        z-index: 99;
        height: 50px;
        width: 100%;
        background-color: rgba(255,255,255,0.4);
        position: relative;
        box-shadow: 0px 0px 8px 1px rgba(0,0,0,0.2);
    }

    .nav .nav-header {
        width: 600px;
        position: absolute;
        display: flex;
        flex-direction: row;
        padding: 10px 10px;
    }

    /* SEARCH BAR */
    .nav-header form {
        position: relative;
        margin-left: 10%;
        width: 40vw;
        background: var(--primary-color);
        border-radius: .7rem;
    }

    .nav-header input,
    .nav-header button {
        height: 2rem;
        border: 0;
    }
    .nav-header input[type="search"] {
        font-size: 18px;
        outline: 0;
        box-shadow: 0 0 0 0.08em #171717 inset;
        width: 100%;
        background: #fafafa;
        padding: 0 1rem;
        border-radius: .4rem;
        appearance: none;
        transition: all .3s cubic-bezier(0, 0, 0.43, 1.49);
        z-index: 1;
        position: relative;
    }
    .nav-header input[type="search"]::placeholder {
        position: absolute;
        top: 3px;
        left: 18px;
    }

    .nav-header button {
        position: absolute;
        top: 0;
        right: 0;
        width: 2rem;
        font-weight: bold;
        background: var(--primary-color);
        border-radius: 0 .7rem .7rem 0;
        cursor: pointer;
    }

    .nav-header input:not(:placeholder-shown) {
        border-radius: .7rem 0 0 .7rem;
        width: calc(100% - 2rem);
        + .nav-header button {
        display: block;
        }
    }

    .nav-header label {
        position: absolute;
        clip: rect(1px, 1px, 1px, 1px);
        padding: 0;
        border: 0;
        height: 0px;
        width: 1px;
        overflow: hidden;
    }


    .nav-title a {
        text-decoration: none;
        z-index: 8;
        color: black;
        font-weight: bold;
    }

    .nav .nav-header .nav-title {
        margin-left: 10px;
        border-radius: 10px;
        font-size: 22px;
        display: inline-block;
        color: inherit;
        transition: .2s ease-in;
        text-decoration: none;
    }

    .nav .nav-btn {
        display: none;
    }

    .nav .nav-links {
        display: inline;
        font-size: 18px;
        margin: 0;
        padding: 0;
    }

    .nav .nav-links .nav-link {
        display: inline-block;
        text-decoration: none;
        color: rgb(10, 10, 40);
        transition: .2s ease-in;
    }

    .nav .nav-links a:hover {
        color: white;
        background-color: rgba(0, 0, 0, 0.6);
    }

    .nav .nav-links .pika:hover {
        color: black;
        background-color: rgba(200, 200, 0, 0.2);
    }

    .nav .nav-links .charmander:hover {
        color: black;
        background-color: rgba(200, 0, 0, 0.2);
    }

    .nav .nav-links .mimikyu:hover {
        color: black;
        background-color: rgba(87, 57, 150, 0.2);
    }

    .nav #nav-check {
        display: none;
    }

@media (max-width:800px) {
    .nav .nav-links .pika:hover {
        color: white;
        background-color: rgba(200, 200, 0, 0.2);
    }

    .nav .nav-links .charmander:hover {
        color: white;
        background-color: rgba(200, 0, 0, 0.2);
    }

    .nav .nav-links .mimikyu:hover {
        color: white;
        background-color: rgba(87, 57, 150, 0.2);
    }


    .nav .nav-links .nav-link {
        color: white;
        font-weight: bold;
    }

    .nav .nav-btn {
        display: inline-block;
        position: absolute;
        right: 0px;
        top: 0px;
    }
    .nav .nav-btn .nav-check {
        display: inline-block;
        width: 50px;
        height: 50px;
        padding: 13px;
    }
    .nav .nav-btn .nav-check:hover,.nav #nav-check:checked ~ .nav-btn .nav-check {
        background-color: rgba(0, 0, 0, 0.1);
    }
    .nav .nav-btn .nav-check span {
        display: block;
        width: 25px;
        height: 10px;
        border-top: 2px solid black;
    }
    .nav .nav-links {
        background-color: rgba(0,0,0,0.40);
        height: 0px;
        transition: all 0.1s ease;
        overflow-y: hidden;
        left: 0;
        z-index: 1; 
        margin-top: -40px
    }

    .nav .nav-links a:hover {
        background-color: rgba(0,0,0,0.1); /* Added a subtle hover effect */
    }
    .nav .active {
        height: 100vh;
        width: 100vw;
        padding: 0;
        margin: 0;
    }

    .nav .nav-link {
        color: white;
        padding: 10px;
        margin: 50px 0;
        display: block;
        font-size: 24px; 
        transition: background-color 0.3s; 
        border-radius: 4px;
        background: none;
        text-align: left;
        border-radius: 5px;
    }
}


</style>


<div class="nav">
    <input type="checkbox" id="nav-check">
    <div class="nav-header">
        <div class="nav-title">
            <a href="#">Pokemon</a>
        </div>
        <form>
            <label for="search">Search for stuff</label>
            <input id="search" type="search" placeholder="Buscar pokemon" autofocus required />
            <button type="submit">🔍</button>
        </form>

    </div>
    <div class="nav-btn">
        <button type="submit" class="nav-check">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>

    <div class="nav-links">
        <a class="nav-link" href="#" target="_blank">Home</a>
        <a class="nav-link pika" href="#" target="_blank">Adicionar</a>
        <a class="nav-link charmander" href="#" target="_blank">Alterar</a>
        <a class="nav-link mimikyu" href="#" target="_blank">Excluir</a>
    </div>
</div>


<script>
    const burguer = document.querySelector(".nav-check");
    burguer.addEventListener("click", () => {
        document.querySelector(".nav-links").classList.toggle("active");
    })
</script>