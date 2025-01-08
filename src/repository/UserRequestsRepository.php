<?php

namespace yhub\module\telegram\repository;

use light\orm\repository\Repository;


class UserRequestsRepository extends Repository
{
    public static function tableName(): string
    {
        return 'user_request';
    }
}