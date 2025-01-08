<?php

namespace yhub\module\telegram\controllers\http;

use yhub\module\telegram\Bot;
use light\http\ControllerInterface;


class TelegramBotController implements ControllerInterface
{
    public function main(): void
    {
        (new Bot('bot/telegram'))->run();
    }
}