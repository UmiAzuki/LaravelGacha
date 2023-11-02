<?php

declare(strict_types=1);

namespace App\Infrastructure\Eloquent\Models;

use Illuminate\Database\Eloquent\Model;

final class MasterGachaWeightModel extends Model
{
    protected $connection = 'mysql';
    protected $table = 'mst_gacha_weight';

    public function gacha()
    {
        return $this->belongsTo(MasterGachaModel::class, 'gacha_id', 'id');
    }
}
