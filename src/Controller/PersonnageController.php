<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PersonnageController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     */
    public function index()
    {
        return $this->render('personnage/index.html.twig');
    }


     /**
     * @Route("/persos", name="personnages")
     */
    public function persos()
    {
        $j1 = [
            "nom" => "Marc",
            "age" => 25,
            "sexe"=> true,
            "carac" => [
                "force" => 3,
                "agi"   => 2,
                "intel" => 3
            ]
        ];
        $j2 = [
            "nom" => "Milo",
            "age" => 30,
            "sexe"=> true,
            "carac" => [
                "force" => 5,
                "agi"   => 1,
                "intel" => 2
            ]
        ];
        $j3 = [
            "nom" => "Tya",
            "age" => 22,
            "sexe"=> false,
            "carac" => [
                "force" => 1,
                "agi"   => 2,
                "intel" => 5
            ]
        ];
        $players = [
            "j1" => $j1,
            "j2" => $j2,
            "j3" => $j3
        ];

        return $this->render('personnage/persos.html.twig', [
            "players" => $players
        ] );
    }
}
