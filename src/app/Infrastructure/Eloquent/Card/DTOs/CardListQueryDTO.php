<?php

declare(strict_types=1);

namespace App\Infrastructure\Eloquent\Card\DTOs;

class CardListQueryDTO
{
    public readonly string $fileName;
    public readonly int $rarity;
    public readonly int $num;

    public function __construct(
        string $fileName,
        int $rarity,
        int $num
    ) {
        $this->fileName = $fileName;
        $this->rarity = $rarity;
        $this->num = $num;
    }
}
