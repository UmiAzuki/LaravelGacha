<?php

declare(strict_types=1);

namespace App\Infrastructure\Eloquent\Card\DTOs;

class GachaHistoryQueryDTO
{
    public readonly string $cardName;
    public readonly string $fileName;
    public readonly int $rarity;
    public readonly int $num;
    public readonly string $createdAt;

    /**
     * @param string $cardName カード名
     * @param string $fileName 画像ファイル名
     * @param int $rarity レアリティ
     * @param int $num 所持枚数
     * @param string $createdAt 作成日時
     */
    public function __construct(
        string $cardName,
        string $fileName,
        int $rarity,
        int $num,
        string $createdAt
    ) {
        $this->cardName = $cardName;
        $this->fileName = $fileName;
        $this->rarity = $rarity;
        $this->num = $num;
        $this->createdAt = $createdAt;
    }
}
