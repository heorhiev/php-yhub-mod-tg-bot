<?php

namespace yhub\module\telegram;

use yhub\module\telegram\commands\StartCommand;


class Bot extends \light\tg\bot\Bot
{
    private static $_commands = [
        'start' => StartCommand::class,
    ];

    public static function getCommands(): array
    {
        return self::$_commands;
    }
}