<?php 

    //habilitadmos los tipos strictos
    declare(strict_types=1);
    

    //creamos una funcion

    function get_data(string $url) : array
    {

        $resultado = file_get_contents($url);

        #obteemos los datos del archivo json
        $data = json_decode($resultado, true);
        
        return $data;
    }



    function render_template (string $template, array $data = [])
    {

        extract($data);
        require "templates/$template.php";

    }

?>