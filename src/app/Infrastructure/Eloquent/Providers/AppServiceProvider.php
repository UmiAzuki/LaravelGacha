<?php

namespace App\Infrastructure\Eloquent\Providers;

use Illuminate\Support\ServiceProvider;
use App\Contracts\IGachaQuery;
use App\Contracts\IGachaService;
use App\Contracts\ICardQuery;
use App\Contracts\ICardRepository;
use App\Infrastructure\Eloquent\TransactionInterface;
use Illuminate\Database\DatabaseManager;


class AppServiceProvider extends ServiceProvider
{
        /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(IGachaQuery::class, function($app) {
            return new \App\InfraStructure\Eloquent\Gacha\GachaQuery();
        });

        $this->app->bind(IGachaService::class, function($app) {
            return new \App\InfraStructure\Eloquent\Gacha\GachaService();
        });

        $this->app->bind(ICardQuery::class, function($app) {
            return new \App\InfraStructure\Eloquent\Card\CardQuery();
        });

        $this->app->bind(ICardRepository::class, function($app) {
            return new \App\InfraStructure\Eloquent\Card\CardRepository();
        });

        $this->app->bind(TransactionInterface::class, function($app) {
            return new \App\InfraStructure\Eloquent\Transaction();
        });

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
