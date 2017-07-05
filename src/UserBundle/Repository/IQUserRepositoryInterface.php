<?php
/**
 * Created by PhpStorm.
 * User: live-edu
 * Date: 5/07/17
 * Time: 20:05
 */

namespace IQDate\UserBundle\Repository;


use PhpOption\Some;

interface IQUserRepositoryInterface
{
    /**
     * @param $nickname
     * @return Some
     */
    public function findByNickname($nickname);
}