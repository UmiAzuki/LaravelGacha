<?php

declare(strict_types=1);

namespace App\Infrastructure\Eloquent\Card;

use App\Infrastructure\Eloquent\Models\UserCardInventoryModel;
use App\Services\Card\Query\DTOs\CardListQueryDTO;
use App\Services\Card\Query\DTOs\GachaHistoryQueryDTO;
use App\Services\Card\Query\ICardQuery;

final class CardQuery implements ICardQuery
{
    /**
     * @inheritDoc
     */
    public function userCardListQuery(int $userId): array
    {
        // それぞれnumが最大のカードを取得する
        $userInventoryCards = UserCardInventoryModel::where('user_id', $userId)
            ->selectRaw('card_id, max(num) as num')
            ->groupBy('card_id')
            ->get();

        $userInventoryCardList = array();

        foreach ($userInventoryCards as $userInventoryCard) {
            $dto = new CardListQueryDTO (
                $userInventoryCard->card->file_name,
                $userInventoryCard->card->rarity_id,
                $userInventoryCard->num
            );
            array_push($userInventoryCardList, $dto);
        }
        return $userInventoryCardList;
    }

    /**
     * @inheritDoc
    */
    public function gachaHistoryQuery(int $userId, int $limitNum = 100): array
    {
        $userInventoryCards = UserCardInventoryModel::where('user_id', $userId)->orderBy('created_at', 'desc')->orderBy('num', 'desc')->limit($limitNum)->get();

        /**
         * @var GachaHistoryQueryDTO[]
         */
        $userInventoryCardList = array();

        foreach ($userInventoryCards as $userInventoryCard) {
            $dto = new GachaHistoryQueryDTO (
                $userInventoryCard->card->card_name,
                $userInventoryCard->card->file_name,
                $userInventoryCard->card->rarity_id,
                $userInventoryCard->num,
                $userInventoryCard->created_at->format('Y-m-d H:i:s')
            );
            array_push($userInventoryCardList, $dto);
        }
        return $userInventoryCardList;
    }
}
