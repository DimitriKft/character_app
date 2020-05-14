<?php

namespace App\Controller;

use App\Entity\Weapon;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class WeaponController extends AbstractController
{
    /**
     * @Route("/weapons", name="weapons")
     */
    public function weapon()
    {
        Weapon::creerWeapons();
        return $this->render('weapon/weapons.html.twig', [
            "weapons" => Weapon::$weapons
        ] );
    }


    /**
     * @Route("/weapons/{nom}", name="display_weapon")
     */
    public function displayWeapon($nom)
    {
        Weapon::creerWeapons();
        $weapon =  Weapon::getWeaponParNom($nom);
        return $this->render('weapon/weapon.html.twig', [
            "weapon" => $weapon
        ] );
    }   
}
