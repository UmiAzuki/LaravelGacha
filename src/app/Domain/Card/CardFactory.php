<?php

declare(strict_types=1);

namespace App\Domain\Card;

final class CardFactory
{
    public static function of(int $id, string $cardName, string $fileName, int $rarityId): Card
    {
        $rarity = Rarity::caseOf($rarityId);
        return new Card($id, $cardName, $fileName, $rarity);
    }
}
