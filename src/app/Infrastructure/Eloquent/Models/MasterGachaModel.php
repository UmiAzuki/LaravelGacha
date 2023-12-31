<?php

declare(strict_types=1);

namespace App\Infrastructure\Eloquent\Models;

use Illuminate\Database\Eloquent\Model;

final class MasterGachaModel extends Model
{
    protected $connection = 'mysql';
    protected $table = 'mst_gacha';
    public $timestamps = false;

    public function gachaWeight()
    {
        return $this->hasMany(MasterGachaWeightModel::class, 'gacha_id', 'id');
    }
}
