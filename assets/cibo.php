<?php

include_once __DIR__ . '/prodotto.php';
class Cibo extends prodotto
{
    public $peso;
    public $ingredienti;

    public function __construct(
        string $immagine,
        string $nome,
        float $prezzo,
        Generi $category,

        float $peso,
        string $ingredienti
    )
    {
        $this->peso = $peso;
        $this->ingredienti = $ingredienti;
        parent::__construct($immagine, $nome, $prezzo, $category);
        
    }
}

?>