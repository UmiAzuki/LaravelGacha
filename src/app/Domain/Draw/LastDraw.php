<?php

declare(strict_types=1);

namespace App\Domain\Draw;

use App\Domain\Card\Card;
use App\Domain\Card\CardDomainService;
use App\Contracts\ICardRepository;
use App\Contracts\IDraw;
use App\Domain\Card\Rarity;

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
        $choice = random_int(1,100);
        // 確率テーブルからレアリティを抽選
        //weightとrarityIDの初期化
        $weight = 0;
        $rarityID = 0;

        //乱数$choiceが$weightより大きければ重みを加算する
        foreach ($gachaWeightTable as $gachaID){
           if ($choice > $weight){
           $weight += $gachaID -> weight;
           $rarityID = $gachaID -> rarityID;
    }
    }
        if($rarityID < Rarity::RARE->value){
           $rarityID = Rarity::RARE->value;
        }

        $cardDomainService = new CardDomainService($this->cardRepository);
        return $cardDomainService->random($rarityID);
    }
}
