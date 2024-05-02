<body>

    <header>
        
        <section>
            <h1>  La próxima pelicula de Marvel</h1>
            <img src=<?= $poster_url?> width="500" height="500" alt="Poster de <?= $title?>" style="border-radius: 32px">
        </section>

    </header>
    

    <hgroup>

    <h2><?=$title?> <?=$days?>.</h2>
    <p> 
        Fecha de estreno: <?=$release_date ?>
    </p>
    <p>        
        La próxima pelicula es: <?=$following_production;?>.<br>
    </p>
    </hgroup>
    

</body>
