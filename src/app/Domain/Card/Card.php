<?php

declare(strict_types=1);

namespace App\Domain\Card;

class Card
{
    private int $id;
    private string $cardName;
    private string $fileName;
    private Rarity $rarity;

    public function __construct(
        int $id,
        string $cardName,
        string $fileName,
        Rarity $rarity,
    ) {
        $this->id = $id;
        $this->cardName = $cardName;
        $this->fileName = $fileName;
        $this->rarity = $rarity;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->cardName;
    }

    public function getImageFileName(): string
    {
        return $this->fileName;
    }

    public function getRarityID(): int
    {
        return $this->rarity->value;
    }
}
