<?php

declare(strict_types=1);

namespace App\Services\Gacha\DTOs;

class GachaCardDTO
{
    public readonly string $cardName;
    public readonly string $fileName;
    public readonly int $rarityID;
    public readonly bool $isNew;

    public function __construct(string $cardName, string $fileName, int $rarityID, bool $isNew)
    {
        $this->cardName = $cardName;
        $this->fileName = $fileName;
        $this->rarityID = $rarityID;
        $this->isNew = $isNew;
    }
}
