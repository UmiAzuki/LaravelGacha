<?php

declare(strict_types=1);

namespace App\Domain\Draw;

use App\Contracts\ICardRepository;
use App\Domain\Card\Card;
use App\Domain\Card\CardDomainService;

/**
 * Normalカードは出ない仕様
 */
final class LastDraw implements IDraw
{
    private ICardRepository $cardRepository;

    public function __construct(ICardRepository $cardRepository)
    {
        $this->cardRepository = $cardRepository;
    }

    /**
     * @inheritDoc
     */
    public function draw(array $gachaWeightTable): Card
    {
        // 課題2-1 百分率の乱数を生成する

        // 確率テーブルからレアリティを抽選
        $rarityID = 1;

        $cardDomainService = new CardDomainService($this->cardRepository);
        return $cardDomainService->random($rarityID);
    }
}
