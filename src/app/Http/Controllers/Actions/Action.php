<?php

declare(strict_types=1);

namespace App\Actions;

use Exception;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Slim\Exception\HttpInternalServerErrorException;
use Slim\Views\PhpRenderer;

abstract class Action
{
    protected PhpRenderer $view;

    public function __construct(PhpRenderer $view)
    {
        $this->view = $view;
    }

    /**
     * @param Request $request
     * @param Response $response
     * @return Response
     */
    public function __invoke(Request $request, Response $response): Response
    {
        return $this->action($request, $response);
    }

    /**
     * アクションメソッド
     * @param Request $request
     * @param Response $response
     * @return Response
     */
    abstract protected function action(Request $request, Response $response): Response;
}
