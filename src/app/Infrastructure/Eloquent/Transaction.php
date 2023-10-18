<?php

declare(strict_types=1);

namespace App\Infrastructure\Eloquent;

use Closure;
use Illuminate\Database\DatabaseManager;

class Transaction implements TransactionInterface
{
    /**
     * @var DatabaseManager
     */
    private $db;

    /**
     * @param DatabaseManager $db
     */
    public function __construct(DatabaseManager $db)
    {
        $this->db = $db;
    }

    /**
     * @param Closure $callback
     * @param int $attempts
     * @return void
     */
    public function handle(Closure $callback, int $attempts = 3): void
    {
        $this->db->connection()->transaction($callback, $attempts);
    }

    public function begin(): void
    {
        $this->db->connection()->beginTransaction();
    }

    public function rollback(): void
    {
        $this->db->connection()->rollback();
    }

    public function commit(): void
    {
        $this->db->connection()->commit();
    }
}
