<?php

class Chat
{
    private int $vie = 0;
    private string $nom;
    private const MAX_VIES = 9;
    private static int $nbChats = 0;

    //Constructeur
    public function __construct(string $nom)
    {
        $this->nom = $nom;
        self::$nbChats++;
    }

    public function prochaineVie(): void
    {
        if ($this->vie < self::MAX_VIES) {
            $this->vie++;
        }
    }
    public function getVie(): int
    {
        return $this->vie;
    }

    public static function getNbChats(): int
    {
        return self::$nbChats;
    }
}


?>