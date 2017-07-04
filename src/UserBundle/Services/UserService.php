<?php

namespace IQDate\UserBundle\Services;

use Doctrine\DBAL\Driver\Connection;
use IQDate\UserBundle\Models\User;

/**
 * Created by PhpStorm.
 * User: live-edu
 * Date: 4/07/17
 * Time: 20:09
 */
class UserService
{
    /**
     * @var Connection
     */
    private $connection;

    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }

    public function findUser(){
        return new User();
    }
}