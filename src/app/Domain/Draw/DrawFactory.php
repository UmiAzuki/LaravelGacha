<?php

declare(strict_types=1);

namespace App\Domain\Draw;

use App\Domain\Card\ICardRepository;

final class DrawFactory
{
    private ICardRepository $cardRepository;
    
    public function __construct(ICardRepository $cardRepository)
    {
        $this->cardRepository = $cardRepository;
    }

    public function doWithDrawType(DrawType $type): IDraw
    {
        return match ($type) {
            DrawType::NORMAL_DRAW => new NormalDraw(
                $this->cardRepository
            ),
            DrawType::LAST_DRAW => new LastDraw(
                $this->cardRepository
            ),
        };
    }
}
