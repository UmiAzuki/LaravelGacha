<?php

declare(strict_types=1);

namespace App\Domain\Card\Ability;

use App\Domain\Card\Rarity;

final class CardAbilityFactory
{
    public static function of(int $id, string $cardName, string $fileName, int $rarityId, int $strength, int $intelligence, int $maxHP, int $maxMP): CardAbility
    {
        $rarity = Rarity::caseOf($rarityId);
        return new CardAbility($id, $rarity, $cardName, $fileName, $strength, $intelligence, $maxHP, $maxMP);
    }
}
