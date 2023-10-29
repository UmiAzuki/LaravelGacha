<?php

declare(strict_types=1);

namespace App\Infrastructure\Eloquent\Card;

use App\Contracts\ICardRepository;
use App\Domain\Card\CardAbility;
use App\Domain\Card\CardAbilityFactory;
use App\Domain\Card\Card;
use App\Domain\Card\CardFactory;
use App\Infrastructure\Eloquent\Models\MasterCardAbilityModel;
use App\Infrastructure\Eloquent\Models\MasterCardModel;
use App\Infrastructure\Eloquent\Models\UserCardInventoryModel;
use Exception;

final class CardRepository implements ICardRepository
{
    /**
     * @inheritDoc
     */
    public function findByID(int $cardID): Card
    {
        $cardModel = MasterCardModel::find($cardID);

        if (is_null($cardModel)) {
            throw new Exception('カードが見つかりませんでした');
        }

        return CardFactory::of(
            $cardModel->id,
            $cardModel->card_name,
            $cardModel->file_name,
            $cardModel->rarity_id,
        );
    }

    /**
     * @inheritDoc
     */
    public function findWithAbilityByID(int $cardID): CardAbility
    {
        $cardModel = MasterCardModel::find($cardID);

        $cardAbility = MasterCardAbilityModel::where('mst_card_id', $cardID)->first();

        if (is_null($cardModel)) {
            throw new Exception('カードが見つかりませんでした');
        }

        return CardAbilityFactory::of(
            $cardModel->id,
            $cardModel->card_name,
            $cardModel->file_name,
            $cardModel->rarity_id,
            $cardAbility->strength,
            $cardAbility->intelligence,
            $cardAbility->hp,
            $cardAbility->mp,
        );
    }

    /**
     * @inheritDoc
     */
    public function findAll(): array
    {
        $cardModelList = MasterCardModel::all();

        if (is_null($cardModelList)) {
            throw new Exception('カードが見つかりませんでした');
        }

        /**
         * @var Card[]
         */
        $cardList = [];

        foreach ($cardModelList as $cardModel) {
            $cardList[] = CardFactory::of(
                $cardModel->id,
                $cardModel->card_name,
                $cardModel->file_name,
                $cardModel->rarity_id,
            );
        }

        return $cardList;
    }

    /**
     * @inheritDoc
     */
    public function insertUserCard(int $userID, Card $card): void
    {
        $num = UserCardInventoryModel::where('user_id', $userID)->where('card_id', $card->getId())->count();

        UserCardInventoryModel::create([
            'user_id' => $userID,
            'card_id' => $card->getId(),
            'num' => $num + 1
        ]);
    }

    /**
     * @inheritDoc
     */
    public function countUserCard(int $userID, Card $card): int
    {
        $num = UserCardInventoryModel::where('user_id', $userID)->where('card_id', $card->getId())->count();

        return $num;
    }
}
