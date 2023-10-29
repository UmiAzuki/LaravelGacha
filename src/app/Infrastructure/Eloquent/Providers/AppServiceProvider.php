<?php

namespace App\Infrastructure\Eloquent\Providers;

use Illuminate\Support\ServiceProvider;
use App\Contracts\IGachaQuery;
use App\Contracts\IGachaService;
use App\Contracts\ICardQuery;
use App\Contracts\ICardRepository;
use App\Infrastructure\Eloquent\TransactionInterface;
use Illuminate\Database\DatabaseManager;

use App\Infrastructure\Eloquent\Gacha\GachaQuery;
use App\Infrastructure\Eloquent\Gacha\GachaService;
use App\Infrastructure\Eloquent\Card\CardQuery;
use App\Infrastructure\Eloquent\Card\CardRepository;
use App\Infrastructure\Eloquent\Transaction;


class AppServiceProvider extends ServiceProvider
{
    /**
     * @var array
     */
    public array $bindings = [
        ICardQuery::class => CardQuery::class,
        ICardRepository::class => CardRepository::class,
        IGachaQuery::class => GachaQuery::class,
        IGachaService::class => GachaService::class,
        TransactionInterface::class => Transaction::class
    ];
}
