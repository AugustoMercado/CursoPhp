<!--Proyecto de LLamar a una Api y crear una pagina de peliculas. Php / Html-->
<?php
    #Declaramos una constante
    const API_URL = "https://whenisthenextmcufilm.com/api";
    #Inicializamos una nueva sesion;
    $ch = curl_init(API_URL);
    #Le indicamos que queremos recibir la peticion, pero que no muestre nada.\
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    /*Ejecutamos la peticion 
        y guardamos los resultados
    */

    #nos de los resultados en formato json
    $resultado = curl_exec($ch);

    #obteemos los datos del archivo json
    $data = json_decode($resultado, true);

    #cerramos sesion del CURL
    curl_close($ch);

    #mostramos lo que conteniene nuestra API
    //var_dump($data);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peliculas</title>
    <!-- Centered viewport --> 
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"
    />
    
    <style>

    :root
    {
        color-scheme: light dark;
    }

    body{ 

        display: grid;
        place-content: center;
    }
    image
    {
        margin: 0;
    }

    header 
    {
        display: flex;
        justify-content: center;
        text-align: center;
    }

    hgroup 
    {
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;

    }
    



    </style>
</head>
<body>
    
    <header>
        
        <section>
            <h1>  La próxima pelicula de Marvel</h1>
            <img src=<?= $data["poster_url"]?> width="300" height="300" alt="Poster de <?= $data["title"]?>" style="border-radius: 16px">
        </section>

    </header>
    

    <hgroup>

    <h2><?=$data["title"]?> se estrena en <?=$data["days_until"]?> dias.</h2>
    <p> 
        Fecha de estreno: <?=$data["release_date"] ?>
    </p>
    <p>        
        La próxima pelicula es: <?=$data["following_production"]["title"];?>
        que se estrena en: <?=$data["following_production"]["days_until"]?> dias.
    </p>
    </hgroup>
    

</body>
</html>