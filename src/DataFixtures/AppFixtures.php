<?php

namespace App\DataFixtures;

use App\Entity\StarshipStatusEnum;
use App\Factory\StarshipFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        StarshipFactory::CreateOne([
            'name' => 'USS Espresso (NCC-1234)',
            'class' => 'Garden',
            'captain' => 'James T. Quick',
            'status' => StarshipStatusEnum::COMPLETED,
            'arrivedAt' => new \DateTimeImmutable('-1 day')
        ]);

        StarshipFactory::CreateMany(20);
    }
}
