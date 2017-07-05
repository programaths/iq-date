<?php

namespace IQDate\UserBundle\Repository;

use Doctrine\ORM\EntityRepository;
use PhpOption\Option;
use PhpOption\Some;


/**
 * Created by PhpStorm.
 * User: live-edu
 * Date: 5/07/17
 * Time: 20:01
 */
class IQUserRepository extends EntityRepository implements IQUserRepositoryInterface
{
    public function findByNickname($nickname)
    {
        return Option::fromValue(new Some($this->findOneBy(['nickname'=>$nickname])));
    }
}