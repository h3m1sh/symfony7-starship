<?php

namespace App\DataFixtures;

use App\Entity\Starship;
use App\Entity\StarshipStatusEnum;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $ship1 = new Starship();
        $ship1->setName('USS Espresso (NCC-1234)');
        $ship1->setClass('Latte');
        $ship1->setCaptain('James T. Quick');
        $ship1->setStatus(StarshipStatusEnum::COMPLETED);
        $ship1->setArrivedAt(new \DateTimeImmutable('-1 day'));


        $ship2 = new Starship();
        $ship2->setName('USS LeafyCruiser');
        $ship2->setClass('Garden');
        $ship2->setCaptain('Jean-Luc Pickles');
        $ship2->setStatus(StarshipStatusEnum::COMPLETED);
        $ship2->setArrivedAt(new \DateTimeImmutable('-1 week'));


        $ship3 = new Starship();
        $ship3->setName('USS Wanderlust (NCC-2021)');
        $ship3->setClass('Delta Tourist');
        $ship3->setCaptain('Kathryn Journeyway');
        $ship3->setStatus(StarshipStatusEnum::WAITING);
        $ship3->setArrivedAt(new \DateTimeImmutable('-1 month'));


        $manager->persist($ship1);
        $manager->persist($ship2);
        $manager->persist($ship3);

        $manager->flush();
    }
}
