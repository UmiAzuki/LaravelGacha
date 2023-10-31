<?php

declare(strict_types=1);

namespace resources\views\Actions\Gacha;

use resources\views\Actions\Action;
use App\Contracts\ICardQuery;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

final class GachaHistoryAction extends Action
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
        $args['response']['gachaHistory'] = $this->cardQuery->gachaHistoryQuery($userId);
        return $this->view->render($response, 'history.phtml', $args);
    }
}
