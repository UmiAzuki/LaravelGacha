<?php
// app/Http/Controllers/GachaController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Contracts\IGachaQuery;
use App\Contracts\IGachaService;


class GachaController extends Controller
{
    private IGachaQuery $gachaQuery;
    private IGachaService $gachaService;

    public function __construct(IGachaQuery $gachaQuery, IGachaService $gachaService)
    {
        $this->gachaQuery = $gachaQuery;
        $this->gachaService = $gachaService;
    }

    public function execute(Request $request)
    {
        $userId = $request->session()->get('userId');
        $gachaID = 1;

        $gachaWeightTable = $this->gachaQuery->gachaWeightQuery($gachaID);

        if ($request->input('gacha_type') === "1") {
            $gachaResult = $this->gachaService->singleGacha($userId, $gachaWeightTable);
            return view('gacha-single', ['gachaResult' => $gachaResult]);
        } elseif ($request->input('gacha_type') === "10") {
            $gachaResult = $this->gachaService->multiGacha($userId, $gachaWeightTable, 10);
            return view('gacha-10shot', ['gachaResult' => $gachaResult]);
        } else {
            return view('top');
        }
    }
}
