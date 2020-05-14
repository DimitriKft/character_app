<?php 

namespace app\Entity;

class Weapon
{
    public $nom;
    public $description;
    public $degat;


    public static $weapons = [];

    public function __construct($nom, $description, $degat)
    {
        $this->nom           = $nom;
        $this->description   = $description;
        $this->degat         = $degat;
        self::$weapons[]     = $this;
    }

    public static function  creerWeapons()
    {
        $a1 = new Weapon("épée", "Une superbe épée tranchante", 10);
        $a2 = new Weapon("hache", "Une arme ou un outil", 15);
        $a3 = new Weapon("arc", "Une arme à distance", 7);
    }

    public static function getWeaponParNom($nom)
    {
        foreach(self::$weapons as $weapon)
        {
            if(strtolower(str_replace("é","e",$weapon->nom)) === $nom)
            {
                return $weapon;
            }
        }
    }
    
}