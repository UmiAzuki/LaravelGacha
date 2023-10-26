<?php

declare(strict_types=1);

namespace resources\views\Actions;

use Exception;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

abstract class Action
{
    protected $view;

    public function __construct($view)
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
