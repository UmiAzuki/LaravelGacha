<?php

declare(strict_types=1);

namespace App\Infrastructure\Eloquent\Gacha;

use App\Domain\IGachaService;
use App\Domain\Card\ICardRepository;
use App\Domain\Draw\DrawFactory;
use App\Domain\Draw\DrawType;
use App\Infrastructure\Eloquent\Gacha\DTOs\GachaCardDTO;

final class GachaService implements IGachaService
{
    private ICardRepository $cardRepository;
    private DrawFactory $drawFactory;

    /**
     * 
     * @param TransactionInterface $transaction
     */
    public function __construct(
        ICardRepository $cardRepository,
    ) {
        $this->cardRepository = $cardRepository;
        $this->drawFactory = new DrawFactory($this->cardRepository);
    }

    /**
     * @inheritDoc
     */
    public function singleGacha(int $userId, array $gachaWeightDTO): GachaCardDTO
    {
        $card = $this->drawFactory->doWithDrawType(DrawType::NORMAL_DRAW)->draw($gachaWeightDTO);
        $num = $this->cardRepository->countUserCard($userId, $card);

        $card->getRarityID();

        $this->cardRepository->insertUserCard($userId, $card);

        // DTOに変換
        // $numが1以上なら、そのカードは既に所持しているカード
        $gachaCardDTO = new GachaCardDTO(
            $card->getName(),
            $card->getImageFileName(),
            $card->getRarityID(),
            $num >= 1
        );

        $_SESSION['gacha_result'] = $gachaCardDTO;

        return $gachaCardDTO;
    }

    /**
     * @inheritDoc
     */
    public function multiGacha(int $userId, array $gachaWeightDTO, int $drawNum): array
    {
        // $drawNum - 1回は通常ガチャ
        for ($i = 1; $i < $drawNum; $i++) {
            $result[] = $this->drawFactory->doWithDrawType(DrawType::NORMAL_DRAW)->draw($gachaWeightDTO);
        }

        // 最後の1回は特別ガチャ
        $result[] = $this->drawFactory->doWithDrawType(DrawType::LAST_DRAW)->draw($gachaWeightDTO);

        // DBに保存
        foreach ($result as $card) {
            $this->cardRepository->insertUserCard($userId, $card);
        }

        // DTOに変換
        $gachaCardDTOs = [];

        foreach ($result as $card) {
            $num = $this->cardRepository->countUserCard($userId, $card);
            $gachaCardDTOs[] = new GachaCardDTO(
                $card->getName(),
                $card->getImageFileName(),
                $card->getRarityID(),
                $num >= 1
            );
        }

        $_SESSION['gacha_result'] = $gachaCardDTOs;

        return $gachaCardDTOs;
    }
}
