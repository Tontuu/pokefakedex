<style>
    .nav {
        z-index: 99;
        height: 50px;
        width: 100%;
        background-color: rgba(255,255,255,0.4);
        box-shadow: 0px 0px 8px 1px rgba(0,0,0,0.2);
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .nav .nav-header {
        width: 100%;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        padding: 10px 10px;
    }

    /* SEARCH BAR */
    .nav-header form {
        position: relative;
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
        height: 100%;
        font-size: 14pt;
        display: flex;
        list-style: none;
    }

    .nav .nav-links li {
        padding: 0 10px;
    }

    .nav .nav-links a {
        text-decoration: none;
        color: black;
    }

    .nav .nav-links a:hover {
        height: 100%;
        width: 100%;
        color: #1f1f1f;
    }


@media (max-width:800px) {
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
    .nav .active {
        height: 100vh;
        width: 100vw;
        padding: 0;
        margin: 0;
    }
}


</style>


<div class="nav">
    <div class="nav-header">
        <div class="nav-title">
            <a href="#">Pokemon</a>
        </div>
        <form>
            <label for="search">Search for stuff</label>
            <input id="search" type="search" placeholder="Buscar pokemon" autofocus required />
            <button type="submit">🔍</button>
        </form>

        <ul class="nav-links">
            <li><a href="#" target="_self">Home</a></li>
            <li><a href="#" target="_self">Adicionar</a></li>
            <li><a href="#" target="_self">Excluir</a></li>
        </ul>
    </div>
    <div class="nav-btn">
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