<?php

declare(strict_types=1);

namespace App\Infrastructure\Eloquent\Models;

use Illuminate\Database\Eloquent\Model;

final class MasterGachaModel extends Model
{
    protected $connection = 'readonly';
    protected $table = 'mst_gacha';

    public function gachaWeight()
    {
        return $this->hasMany(MasterGachaWeightModel::class, 'gacha_id', 'id');
    }
}
