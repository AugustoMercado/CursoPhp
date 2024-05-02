<?php 

declare(strict_types=1);

class NextMovie
{
    public function __construct(  private string $title,
    private int $days,
    private string $following_production,
    private string $release_date,
    private string $poster_url,
    private string $overview,)
    {
    }

        //creamos una funcion para los meses    

    function get_until_message (): string
    {
        $days = $this->days;
        return match (true)
        {
            $days == 0 => "se estrena hoy.",
            $days == 1 => "se estrena mañana...",
            $days < 7  => "se estrena esta semana...",
            $days < 30 => "se estrena este mes...",
            default => "se entrena en $days dias..."
        };
    }
    
        public static function fetch_and_create_movie(string $api_utrl)
        {
            $resultado = file_get_contents($api_utrl);
            $data = json_decode($resultado,true);
            
            return new self(
            $data["title"],
            $data["days_until"],
            $data["following_production"]["title"] ?? "Se desconoce.",
            $data["release_date"],
            $data["poster_url"],
            $data["overview"], );

        }

        public function get_data()
        {

            return get_object_vars($this);

        }
}

?>