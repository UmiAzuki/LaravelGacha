<?php

declare(strict_types=1);

namespace App\Domain\Card;

use App\Contracts\ICardRepository;
use App\Domain\Card\Card;

final class CardDomainService
{

    private ICardRepository $cardRepository;

    public function __construct(ICardRepository $cardRepository)
    {
        $this->cardRepository = $cardRepository;
    }

    /**
     * ランダムなCardを取得する
     */
    public function random(int $rarityID = null): Card
    {
        $cards = $this->cardRepository->findAll();

        // rarityIDが指定されている場合は、そのレアリティのカードのみを抽選対象とする
        if (!is_null($rarityID)) {
            $cards = array_filter($cards, function ($card) use ($rarityID) {
                return $card->getRarityID() === $rarityID;
            });
        }

        $card = $cards[array_rand($cards)];

        return $card;
    }
}
