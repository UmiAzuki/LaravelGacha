<?php

declare(strict_types=1);

namespace resources\views\Actions\Card;

use resources\views\Actions\Action;
use App\Domain\Card\ICardQuery;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

final class CardListAction extends Action
{
    private ICardQuery $cardQuery;

    /**
     * @param Action $view
     * @param ICardQuery $cardQuery
     */
    public function __construct(Action $view, ICardQuery $cardQuery)
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
