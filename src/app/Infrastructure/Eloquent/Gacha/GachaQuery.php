<?php

declare(strict_types=1);

namespace App\Infrastructure\Eloquent\Gacha;

use App\Infrastructure\Eloquent\Models\MasterGachaWeightModel;
use App\Infrastructure\Eloquent\Gacha\DTOs\GachaWeightDTO;
use App\Domain\IGachaQuery;

final class GachaQuery implements IGachaQuery
{
    /**
     * @inheritDoc
     */
    public function gachaWeightQuery(int $gachaId): array
    {
        $gachaWeightModels = MasterGachaWeightModel::where('gacha_id', $gachaId)->get();

        $gachaWeightDTOs = [];

        foreach ($gachaWeightModels as $gachaWeightModel) {
            $gachaWeightDTOs[] = new GachaWeightDTO(
                $gachaWeightModel->rarity_id,
                $gachaWeightModel->weight
            );
        }

        return $gachaWeightDTOs;
    }
}
