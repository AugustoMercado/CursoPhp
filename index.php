<?php

    require_once 'funciones.php';
    require_once 'constante.php';
    require_once 'clases/siguientePelicula.php';

    $siguientePelicula = NextMovie::fetch_and_create_movie(API_URL);
    
    $data = $siguientePelicula ->get_data();

?>

<?php render_template("head",$data)?>
<?php render_template("main",array_merge($data,["days" => $siguientePelicula ->get_until_message()]))?>
<?php render_template("style")?>

