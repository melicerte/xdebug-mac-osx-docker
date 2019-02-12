<?php

class Ligne {
    /**
     * @var string
     */
    private $ligne;

    public function __construct(string $ligne)
    {
        $this->ligne = $ligne;
    }

    public function display()
    {
        echo $this->ligne."<br>";
    }
}

$lignes = [
    'Do',
    'Ré',
    'Mi',
    'Fa',
    'Sol',
    'La',
    'Si',
    'Do'
];
array_walk($lignes, function($ligne){
    (new Ligne($ligne))->display();
});