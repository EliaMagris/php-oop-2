<?php

include_once __DIR__ . '/prodotto.php';
class Giocattoli extends prodotto
{
    public $caratteristiche;
    public $dimensioni;

    public function __construct(
        string $immagine,
        string $nome,
        float $prezzo,
        Generi $category,

        string $caratteristiche,
        string $dimensioni
    )
    {
        $this->caratteristiche = $caratteristiche;
        $this->dimensioni = $dimensioni;
        parent::__construct($immagine, $nome, $prezzo, $category);
        
    }
}

?>