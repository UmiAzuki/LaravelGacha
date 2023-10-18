<?php

declare(strict_types=1);

namespace App\Services\Gacha;
use App\Services\Gacha\DTOs\GachaWeightDTO;


interface IGachaQuery
{
    /**
     * ガチャIDからガチャの確率テーブルを取得する
     * @param int $gachaId ガチャID
     * @return GachaWeightDTO[]
     */
    public function gachaWeightQuery(int $gachaId): array;
}
