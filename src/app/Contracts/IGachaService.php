<?php

declare(strict_types=1);

namespace App\Contracts;

use App\Infrastructure\Eloquent\Gacha\DTOs\GachaCardDTO;
use App\Infrastructure\Eloquent\Gacha\DTOs\GachaWeightDTO;

interface IGachaService
{
    /**
     * 単発ガチャを引く
     * @param int $userId ユーザーID
     * @param GachaWeightDTO[] $gachaWeightDTO ガチャの確率テーブル
     * @return GachaCardDTO
     */
    public function singleGacha(int $userId, array $gachaWeightDTO): GachaCardDTO;

    /**
     * 複数回ガチャを引く
     * @param int $userId ユーザーID
     * @param GachaWeightDTO[] $gachaWeightDTO ガチャの確率テーブル
     * @param int $drawNum ガチャを引く回数
     * @return GachaCardDTO[]
     */
    public function multiGacha(int $userId, array $gachaWeightDTO, int $drawNum): array;
}
