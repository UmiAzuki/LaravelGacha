<?php

declare(strict_types=1);

namespace App\Infrastructure\Eloquent\Gacha\DTOs;

readonly class GachaWeightDTO
{
    public int $rarityID;
    public int $weight;

    public function __construct(int $rarityID, int $weight)
    {
        $this->rarityID = $rarityID;
        $this->weight = $weight;
    }
}
