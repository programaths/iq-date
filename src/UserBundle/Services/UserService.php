<?php

namespace IQDate\UserBundle\Services;

use Doctrine\DBAL\Driver\Connection;
use IQDate\UserBundle\Entity\IQUser;
use IQDate\UserBundle\Repository\IQUserRepository;
use IQDate\UserBundle\Repository\IQUserRepositoryInterface;

/**
 * Created by PhpStorm.
 * User: live-edu
 * Date: 4/07/17
 * Time: 20:09
 */
class UserService
{
    /**
     * @var IQUserRepositoryInterface
     */
    private $repository;

    public function __construct(IQUserRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function findUser(){
        return new IQUser();
    }
}