<?php

declare(strict_types=1);

namespace App\Domain\Card;

use App\Domain\Card\CardAbility;
use Exception;

interface ICardRepository
{
    /**
     * カードをIDで検索する
     * @param int $cardID カードID
     * @return Card
     * @throws Exception
     */
    public function findByID(int $cardID): Card;

    /**
     * Abilityを含んだカードをIDで検索する
     * @param int $cardID カードID
     * @return CardAbility
     */
    public function findWithAbilityByID(int $cardID): CardAbility;

    /**
     * カードを全件取得する
     * @return Card[]
     * @throws Exception
     */
    public function findAll(): array;

    /**
     * ユーザの手持ちにカードを追加
     * @param int $userID ユーザーID
     * @param Card $card カード
     * @return void
     */
    public function insertUserCard(int $userID, Card $card): void;

    /**
     * ユーザの特定カードの枚数を取得
     * @param int $userID ユーザーID
     * @param Card $card カード
     * @return int
     */
    public function countUserCard(int $userID, Card $card): int;
}
