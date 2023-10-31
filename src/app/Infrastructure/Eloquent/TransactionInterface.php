<?php

declare(strict_types=1);

namespace App\Infrastructure\Eloquent;

use Closure;

interface TransactionInterface
{
    public function handle(Closure $callback, int $attempts = 3): void;
    public function begin(): void;
    public function commit(): void;
    public function rollback(): void;
}
