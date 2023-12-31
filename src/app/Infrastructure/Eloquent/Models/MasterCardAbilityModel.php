<?php

declare(strict_types=1);

namespace App\Infrastructure\Eloquent\Models;

use Illuminate\Database\Eloquent\Model;

final class MasterCardAbilityModel extends Model
{
    protected $connection = 'mysql';
    protected $table = 'mst_card_ability';
    public $timestamps = false;

    public function card()
    {
        return $this->belongsTo(MasterCardModel::class, 'mst_card_id', 'id');
    }
}
