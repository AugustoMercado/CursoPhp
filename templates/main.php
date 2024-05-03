<body>

    <header>
        
        <section>
            <h1> La próxima pelicula de Marvel </h1>
            <img src=<?= $poster_url?> width="500" height="500" alt="Poster de <?= $title?>" style="border-radius: 32px">
        </section>

    </header>
    

    <hgroup>

    <h2><?=$title?> <?=$days?>.</h2>
    <p> 
        Fecha de estreno: <?=$release_date ?>
    </p>
    <p>        
        La próxima pelicula a estrenar es: <?=$following_production[0]["title"];?>.<br>
        Que se va a estrenar en <?=$following_production[0]["days_until"];?> días.
    </p>
    <section>
            <img src=<?=$following_production[0]["poster_url"]?> width="200" height="200" alt="Poster de <?=$following_production[0]["title"]?>" style="border-radius: 32px">
        </section>
    </hgroup>
 

</body>
