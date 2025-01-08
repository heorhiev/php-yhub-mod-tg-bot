<?php

namespace yhub\module\telegram\controllers\http;

use yhub\module\telegram\YHubTelegramBot;
use light\http\ControllerInterface;


class TelegramBotController implements ControllerInterface
{
    public function main(): void
    {
        $bot = new YHubTelegramBot('telegram');
        $bot->run();
    }
}