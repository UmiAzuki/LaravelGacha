<?php

declare(strict_types=1);

namespace App\Infrastructure\Eloquent\Models;

use Illuminate\Database\Eloquent\Model;

final class UserCardInventoryModel extends Model
{
    protected $table = 'tbl_user_card_inventory';
    protected $fillable = ['user_id', 'card_id', 'num'];
    public $timestamps = false;

    public function card()
    {
        return $this->belongsTo(MasterCardModel::class, 'card_id', 'id');
    }
}
