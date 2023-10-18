<?php

declare(strict_types=1);

namespace App\Services\Gacha\Draw;

use App\Domain\Card\Card;
use App\Services\Gacha\DTOs\GachaWeightDTO;

interface IDraw
{
    /**
     * ガチャを引く
     * @param GachaWeightDTO[] $gachaWeightTable ガチャの確率テーブル
     * @return Card
     */
    public function draw(array $gachaWeightTable): Card;
}
