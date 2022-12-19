<?php

include_once __DIR__ . '/prodotto.php';
class Accessori extends prodotto
{
    public $materiale;
    public $dimensioni;

    public function __construct(
        string $immagine,
        string $nome,
        float $prezzo,
        Generi $category,

        string $materiale,
        string $dimensioni
    )
    {
        $this->materiale = $materiale;
        $this->dimensioni = $dimensioni;
        parent::__construct($immagine, $nome, $prezzo, $category);
        
    }
}

?>