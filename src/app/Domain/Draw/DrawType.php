<?php

declare(strict_types=1);

namespace App\Domain\Draw;

enum DrawType
{
    case NORMAL_DRAW;
    case LAST_DRAW;
}
