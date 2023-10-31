<?php

namespace App\Http\Controllers;

use app\Http\Controllers\Controller;
use resources\views\Actions\Gacha\GachaExecuteAction;
use App\Contracts\IGachaService;
use App\Contracts\IGachaQuery;
use resources\views\Actions\Action;
use App\Infrastructure\Eloquent\Gacha\GachaQuery;
use App\Infrastructure\Eloquent\Gacha\GachaService;
use App\Domain\Card\CardRepository;
use Illuminate\Http\Request;

class TestController extends Controller

{
    private IGachaQuery $gachaQuery;
    private IGachaService $gachaService;

    public function __construct(IGachaQuery $gachaQuery, IGachaService $gachaService)
    {
        $this->gachaQuery = $gachaQuery;
        $this->gachaService = $gachaService;
    }

    public function named_route()
    {
        // ここで $gachaQuery と $gachaService を使用できます
        // $gachaQuery と $gachaService はコンストラクタ経由で注入されます

        // 例: $result = $this->gachaService->singleGacha($userId, $gachaWeightTable);

        $GachaAction = new GachaExecuteAction($this -> gachaQuery, $this -> gachaService);
        return view('gacha-result');
    }
}

