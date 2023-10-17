<?php

declare(strict_types=1);

namespace App\Actions\Gacha;

use App\Actions\Action;
use App\Services\Gacha\IGachaQuery;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use App\Services\Gacha\IGachaService;
use Slim\Views\PhpRenderer;

final class GachaExecuteAction extends Action
{
    private IGachaQuery $gachaQuery;
    private IGachaService $gachaService;

    /**
     * @param PhpRenderer $view
     * @param IGachaQuery $gachaQuery
     * @param IGachaService $gachaService
     */
    public function __construct(PhpRenderer $view, IGachaQuery $gachaQuery, IGachaService $gachaService)
    {
        parent::__construct($view);
        $this->gachaQuery = $gachaQuery;
        $this->gachaService = $gachaService;
    }

    /**
     * @inheritDoc
     */
    protected function action(Request $request, Response $response): Response
    {
        $userId = $request->getAttribute('session')['userId'];
        $gachaID = 1;

        $gachaWeightTable = $this->gachaQuery->gachaWeightQuery($gachaID);

        if ($_POST["gacha_type"] === "1") {
            $args['response']['gachaResult'] = $this->gachaService->singleGacha($userId, $gachaWeightTable);
            return $this->view->render($response, 'gacha-single.phtml', $args);
        }
        if ($_POST["gacha_type"] === "10") {
            $args['response']['gachaResult'] = $this->gachaService->multiGacha($userId, $gachaWeightTable, 10);
            return $this->view->render($response, 'gacha-10shot.phtml', $args);
        }
        return $this->view->render($response, 'gacha-top.phtml');
    }
}
