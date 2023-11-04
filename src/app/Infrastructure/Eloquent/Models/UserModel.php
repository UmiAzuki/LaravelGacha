<?php

declare(strict_types=1);

namespace App\Infrastructure\Eloquent\Models;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    protected $table = 'tbl_users';
    protected $fillable = ['user_code'];
    public $timestamps = false;
}
