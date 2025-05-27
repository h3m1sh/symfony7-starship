<?php

namespace App\Repository;

use App\Model\Starship;
use App\Model\StarshipStatusEnum;
use Psr\Log\LoggerInterface;

class StarshipRepository
{

    public function __construct(private  LoggerInterface $logger)
    {
    }
    public function findAll(): array
    {
        $this->logger->info("Starship collection retrieved");

        return [
            new Starship(
                1,
                'USS Wanderlust (NCC-2024-W)',
                'Delta Tourist',
                'Kathryn Journeyway',
                StarshipStatusEnum::COMPLETED
            ),
            new Starship(
                2,
                'USS Horizon (NCC-3045-H)',
                'Nova Explorer',
                'James Sterling',
                StarshipStatusEnum::WAITING
            ),
            new Starship(
                3,
                'USS Aurora (NCC-2087-A)',
                'Solar Cruiser',
                'Lena Orin',
                StarshipStatusEnum::PROGRESS
            ),
            new Starship(
                4,
                'USS Titanfall (NCC-4091-T)',
                'Battle Vanguard',
                'Rico Daelan',
                StarshipStatusEnum::WAITING
            ),
            new Starship(
                5,
                'USS Eclipsion (NCC-3102-E)',
                'Shadow Recon',
                'Yuki Madera',
                StarshipStatusEnum::COMPLETED
            ),
            new Starship(
                6,
                'USS Skylance (NCC-2120-S)',
                'Strato Cruiser',
                'Nolan Vega',
                StarshipStatusEnum::PROGRESS
            ),
            new Starship(
                7,
                'USS Pathfinder (NCC-5101-P)',
                'Frontier Scout',
                'Aria Thorne',
                StarshipStatusEnum::WAITING
            ),
            new Starship(
                8,
                'USS Aetherwind (NCC-3907-A)',
                'Nebula Hauler',
                'Gideon Black',
                StarshipStatusEnum::COMPLETED
            ),
            new Starship(
                9,
                'USS Polaris (NCC-1503-P)',
                'Quantum Skipper',
                'Selene Idris',
                StarshipStatusEnum::WAITING
            ),
            new Starship(
                10,
                'USS Celestia (NCC-6609-C)',
                'Ethereal Voyager',
                'Darius Quinn',
                StarshipStatusEnum::PROGRESS
            ),
        ];
    }

    public function find(int $id): ?Starship
    {
        foreach ($this->findAll() as $starship) {
            if ($starship->getId() === $id) {
                return $starship;
            }
        }
        return null;
    }
}