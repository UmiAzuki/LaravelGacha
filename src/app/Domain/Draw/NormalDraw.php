<?php

declare(strict_types=1);

namespace App\Domain\Draw;

use App\Contracts\ICardRepository;
use App\Domain\Card\Card;
use App\Domain\Card\CardDomainService;
use App\Contracts\IDraw;

/**
 * 確率テーブルどおりにカードを引く
 */
final class NormalDraw implements IDraw
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
        $choice = random_int(1,100);

        // 課題2-1 確率テーブルからレアリティを抽選
        // 現状では常に1が選ばれる

        //weightとrarityIDの初期化
        $weight = 0;
        $rarityID = 1;

        //乱数$choiceが$weightより大きければ重みを加算する
        foreach ($gachaWeightTable as $gachaID){

            if ($choice > $weight){
                $weight += $gachaID -> weight;
                $rarityID = $gachaID -> rarityID;
            }            
        }
        $cardDomainService = new CardDomainService($this->cardRepository);
        return $cardDomainService->random($rarityID);
    }
}
