<?php

declare(strict_types=1);

namespace App\Infrastructure\Eloquent\Models;

use Illuminate\Database\Eloquent\Model;

final class MasterCardModel extends Model
{
    protected $connection = 'readonly';
    protected $table = 'mst_card';

    public function ability()
    {
        return $this->hasOne(MasterCardAbilityModel::class, 'mst_card_id', 'id');
    }
}
