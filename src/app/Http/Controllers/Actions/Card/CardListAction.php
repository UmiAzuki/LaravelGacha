<?php

declare(strict_types=1);

namespace App\Actions\Card;

use App\Actions\Action;
use App\Services\Card\Query\ICardQuery;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Slim\Views\PhpRenderer;

final class CardListAction extends Action
{
    private ICardQuery $cardQuery;

    /**
     * @param PhpRenderer $view
     * @param ICardQuery $cardQuery
     */
    public function __construct(PhpRenderer $view, ICardQuery $cardQuery)
    {
        parent::__construct($view);
        $this->cardQuery = $cardQuery;
    }

    /**
     * @inheritDoc
     */
    protected function action(Request $request, Response $response): Response
    {
        $userId = $request->getAttribute('session')['userId'];
        $args['response']['cardInventory'] = $this->cardQuery->userCardListQuery($userId);
        return $this->view->render($response, 'cards.phtml', $args);
    }
}
