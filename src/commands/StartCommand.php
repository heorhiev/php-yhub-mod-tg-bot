<?php

namespace yhub\module\telegram\commands;

use light\i18n\Loco;
use yhub\module\telegram\constants\BotConst;
use yhub\module\telegram\entities\User;
use yhub\module\telegram\helpers\MenuHelper;


class StartCommand extends \light\tg\bot\models\Command
{
    public static function getTitle(): string
    {
        return Loco::translate('Start');
    }


    public function run(): void
    {
        self::createUser($this->getBot()->getUserId());

        $message = $this->getBot()->getNewMessage();

        $menu = $this->getBot()->getMenu();
        if ($menu) {
            $message->setKeyboardMarkup(MenuHelper::getDefaultMenuKeyboard($this->getBot()->getUserId(), $menu));
        }

        $message->setMessageView('{@antiBotViews}/start');

        $this->getBot()->sendMessage($message);
    }


    private static function createUser($userId): void
    {
        User::repository()->getIdOrCreate([
            'id' => $userId,
            'status' => BotConst::USER_STATUS_ACTIVE,
        ]);
    }
}