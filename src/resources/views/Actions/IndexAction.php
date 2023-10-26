<?php

declare(strict_types=1);

namespace App\Actions;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
final class IndexAction extends Action
{
    /**
     * @inheritDoc
     */
    protected function action(Request $request, Response $response): Response 
    {
        $stampFileNames = glob(__DIR__ . '/../../public/assets/img/ui/iltan_stamp/*.png');
        $stampFileName = basename($stampFileNames[array_rand($stampFileNames)]);

        $args = [
            'stampFileName' => $stampFileName,
        ];
        return $this->view->render($response, 'gacha-top.phtml', $args);
    }
}
