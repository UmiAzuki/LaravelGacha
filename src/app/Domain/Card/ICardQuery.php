<?php

declare(strict_types=1);

namespace App\Domain\Card;

use App\Infrastructure\Eloquent\Card\DTOs\CardListQueryDTO;
use App\Infrastructure\Eloquent\Card\DTOs\GachaHistoryQueryDTO;

interface ICardQuery
{
    /**
     * 重複を含まないユーザーのカード一覧を取得する
     * @param int $userId ユーザーID
     * @return CardListQueryDTO[]
     */
    public function userCardListQuery(int $userId): array;

    /**
     * ガチャの履歴を取得する
     * @param int $userId ユーザーID
     * @param int $limitNum 取得するカード枚数制限
     * @return GachaHistoryQueryDTO[]
     */
    public function gachaHistoryQuery(int $userId, int $limitNum = 100): array;
}
