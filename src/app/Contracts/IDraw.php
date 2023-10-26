<?php

declare(strict_types=1);

namespace App\Domain\Draw;

use App\Domain\Card\Card;
use App\Infrastructure\Eloquent\Gacha\DTOs\GachaWeightDTO;

interface IDraw
{
    /**
     * ガチャを引く
     * @param GachaWeightDTO[] $gachaWeightTable ガチャの確率テーブル
     * @return Card
     */
    public function draw(array $gachaWeightTable): Card;
}
