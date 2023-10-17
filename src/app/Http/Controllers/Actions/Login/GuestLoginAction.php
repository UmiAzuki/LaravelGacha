<?php

declare(strict_types=1);

namespace App\Actions\Login;

use App\Actions\Action;
use App\Services\User\IUserAuthService;
use Exception;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Slim\Exception\HttpInternalServerErrorException;
use Slim\Flash\Messages;
use Slim\Views\PhpRenderer;

final class GuestLoginAction extends Action
{
    private IUserAuthService $userAuthService;

    /**
     * @param PhpRenderer $view
     * @param IUserAuthService $userAuthService
     */
    public function __construct(PhpRenderer $view, IUserAuthService $userAuthService)
    {
        parent::__construct($view);
        $this->userAuthService = $userAuthService;
    }

    /**
     * @inheritDoc
     */
    protected function action(Request $request, Response $response): Response
    {
        $userCode = $_COOKIE['userCode'] ?? null;

        // 未認証の場合
        if (is_null($userCode)) {
            $this->userAuthService->register();
            return $response->withHeader('Location', '/login')->withStatus(303);
        }

        $this->userAuthService->auth($userCode);

        (new Messages())->addMessage('message', 'ログインしました。');

        return $response->withHeader('Location', '/index')->withStatus(303);
    }
}
