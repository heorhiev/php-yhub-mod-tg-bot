<?php

namespace yhub\module\telegram;

use light\app\services\AliasService;
use yhub\module\telegram\controllers\http\TelegramBotController;
use light\app\BootstrapInterface;
use light\http\Http;


class Bootstrap implements BootstrapInterface
{
    public function bootstrap($app): void
    {
        Http::addRoute('anti-bot-handler', TelegramBotController::class);
        AliasService::setPath('{@antiBotViews}', __DIR__ . '/views');
    }
}
