<?php

declare(strict_types=1);

namespace resources\views\Actions\Gacha;

use resources\views\Actions\Action;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

final class GachaResultsAction extends Action
{
    /**
     * @inheritDoc
     */
    protected function action(Request $request, Response $response): Response
    {
        $args['response']['gachaResult'] = $_SESSION['gacha_result'];
        return $this->view->render($response, 'gacha-result.blade.php', $args);
    }
}
