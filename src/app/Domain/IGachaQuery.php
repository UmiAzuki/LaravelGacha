<?php

declare(strict_types=1);

namespace App\Domain;
use App\Infrastructure\Eloquent\Gacha\DTOs\GachaWeightDTO;


interface IGachaQuery
{
    /**
     * ガチャIDからガチャの確率テーブルを取得する
     * @param int $gachaId ガチャID
     * @return GachaWeightDTO[]
     */
    public function gachaWeightQuery(int $gachaId): array;
}
